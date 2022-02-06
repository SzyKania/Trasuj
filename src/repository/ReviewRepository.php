<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Review.php';

class ReviewRepository extends Repository
{

    public function getRouteReviews(int $id_route): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT rating, rr.created_at, rr.description, ud.image, ud.name, ud.surname
            FROM public.route_reviews rr
            JOIN users u on rr.id_user = u.id
            JOIN users_details ud on u.id_user_details = ud.id
            WHERE id_route = :id_route
        ');

        $stmt->bindParam(':id_route', $id_route, PDO::PARAM_INT);
        $stmt->execute();
        $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($reviews as $review) {
            $result[] = new Review(
                $review['rating'],
                $review['created_at'],
                $review['description'],
                $review['image'],
                $review['name'],
                $review['surname']
            );
        }

        return $result;
    }


    public function addReview(Review $review, $id_route, $id_user): void
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO public.route_reviews (id_user, id_route, rating, description)
            VALUES (?, ?, ?, ?)
            ON CONFLICT (id_user, id_route) DO UPDATE
                SET rating = excluded.rating,
                    description = excluded.description
        ');

        var_dump($id_user);
        var_dump($id_route);

        $stmt->execute([
            $id_user,
            $id_route,
            $review->getRating(),
            $review->getDescription()
        ]);
    }

}