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
            $route['image']
        );
    }

}