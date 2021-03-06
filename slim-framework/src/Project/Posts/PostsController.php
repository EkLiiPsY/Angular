<?php
/**
 * Created by PhpStorm.
 * User: alonso
 * Date: 2019-05-18
 * Time: 13:52
 */

namespace Project\Posts;

use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;


class PostsController
{
    private $dao;

    public function __construct(ContainerInterface $container)
    {
        $dbConnection = $container['dbConnection'];
        $this->dao = new PostsDao($dbConnection);
    }

    function getAll(Request $request, Response $response, array $args)
    {
        $posts = $this->dao->getAll();
        return $response->withJson($posts);
    }

    function getByClass(Request $request, Response $response, array $args)
    {
        $posts = $this->dao->getByClass($args['classe']);
        return $response->withJson($posts);
    }

    function getPost(Request $request, Response $response, array $args)
    {
        $posts = $this->dao->getById($args['id']);
        return $response->withJson($posts);
    }
    function updatePost(Request $request, Response $response, array $args)
    {
        $id = $args['id'];
        $body = $request->getParsedBody();
        $user = $this->dao->updatePost($id, $body);
        return $response->withJson($user);
    }

    function getPhotos(Request $request, Response $response, array $args)
    {
        $photos = $this->dao->getPhotosById($args['id']);
        return $response->withJson($photos);
    }

    function createPost(Request $request, Response $response, array $args)
    {
        $body = $request->getParsedBody();
        $post = $this->dao->createPost($body);
        return $response->withJson($post);
    }

    function getByUsername(Request $request, Response $response, array $args)
    {
        $posts = $this->dao->getByUsername($args['username']);
        return $response->withJson($posts);
    }

    function deletePostById(Request $request, Response $response, array $args)
    {
        $postID = $args['id'];
        $this->dao->delete($postID);
        return $response->withStatus(201);
    }
}