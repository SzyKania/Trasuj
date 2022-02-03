<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Review.php';

class ReviewRepository extends Repository
{
    public function getReview(int $id_user, int $id_route): ?Review
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.route_reviews
            WHERE id_user = :id_user AND id_route = :id_route
        ');
        $stmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $stmt->bindParam(':id_route', $id_route, PDO::PARAM_INT);
        $stmt->execute();

        $review = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($review == false) {
            return null;
        }

        return new Review(
            $review['rating'],
            $review['created_at'],
            $review['description']
        );
    }

    public function addReview(Review $review): void
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO public.route_reviews (id_user, id_route, rating, description)
            VALUES (?, ?, ?, ?)
            ON CONFLICT (id_user, id_route) DO UPDATE
                SET rating = excluded.rating,
                    description = excluded.description
        ');

        $id_user = 2;
        $id_route = 2;

        $stmt->execute([
            $id_user,
            $id_route,
            $review->getRating(),
            $review->getDescription()
        ]);
    }

}