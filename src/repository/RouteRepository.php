<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Route.php';

class RouteRepository extends Repository
{
    public function getRoute(int $id): ?Route
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.routes
            JOIN public.roadtypes on routes.id_roadtype = roadtypes.id
            WHERE routes.id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $route = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($route == false) {
            return null;
        }

        return new Route(
            $route['title'],
            $route['city'],
            $route['type'],
            $route['image'],
            $route['rating']
        );
    }

    public function getRoutes(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT title, city, type, image, rating
            FROM public.routes JOIN public.roadtypes
            on routes.id_roadtype = roadtypes.id
        ');

        $stmt->execute();
        $routes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($routes as $route) {
            $result[] = new Route(
                $route['title'],
                $route['city'],
                $route['type'],
                $route['image'],
                $route['rating']
            );
        }

        return $result;
    }

    public function addRoute(Route $route): void
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO public.routes (id_created_by, title, city, point_a, point_b, id_roadtype, image)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ');

        $createdById = 2;
        $pointA = '-87.6, 41.9';
        $pointB = '-87.9, 42.0';

        $stmt->execute([
            $createdById,
            $route->getTitle(),
            $route->getCity(),
            $pointA,
            $pointB,
            intval($route->getRoadtype(), 10),
            $route->getImage()
        ]);
    }

    public function getRouteByCity(string $searchString)
    {
        $searchString = '%' . strtolower($searchString) . '%';

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.routes 
            JOIN public.roadtypes
            on routes.id_roadtype = roadtypes.id
            WHERE LOWER(city) LIKE :search OR LOWER(title) LIKE :search
        ');
        $stmt->bindParam(':search', $searchString, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}