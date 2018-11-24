<?php

namespace SoftUniBlogRestApiBundle\Controller;

;


use Symfony\Component\Routing\Annotation\Route;
use SoftUniBlogBundle\Entity\Article;
use SoftUniBlogBundle\Entity\User;
use SoftUniBlogBundle\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
    /**
     * @Route("/articles", name="rest_api_articles", methods={"GET"})
     *
     */
    public function articlesAction()
    {
        $articles = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();

        $serializer = $this->container->get('jms_serializer');
        $json = $serializer->serialize($articles, 'json');

        return new Response($json,
            Response::HTTP_OK,
            array('content-type' => 'application/json'));
    }

    /**
     * @Route("/article/{id}", name="rest_api_article", methods={"GET"})
     * @param $id article id
     * @return JsonResponse
     */
    public function articleAction($id)
    {
        $article = $this->getDoctrine()
            ->getRepository(Article::class)
            ->find($id);

        if (null === $article){
            return new Response(json_encode(['error' => 'resource not found']),
        Response::HTTP_NOT_FOUND,
        ['content-type' => 'application/json']);
        }

        $serializer = $this->container->get('jms_serializer');
        $articleJson = $serializer->serialize($article, 'json');

        return new Response($articleJson,
            Response::HTTP_OK,
            ['content-type' => 'application/json']);

    }

    /**
     * @Route("/articles/create", name="rest_api_article_create", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function createAction(Request $request)
    {
        try{
            $this->createNewArticle($request);

            return new Response(null, Response::HTTP_CREATED);

        }catch (\Exception $exception){
            return new Response(json_encode(['error' => $exception->getMessage()]),
                Response::HTTP_BAD_REQUEST,
                ['content-type' => 'application/json']);
        }
    }

    /**
     * @param Request $request
     * @return Article
     * @throws \Exception
     */
    protected function createNewArticle(Request $request)
    {
        $article = new Article();
        $parameters = $request->request->all();
        $persistedType = $this->processForm($article, $parameters, 'POST');
        return $persistedType;
    }

    /**
     * @param Request $reqest
     * @return Article
     * @throws \Exception
     */
    private function processForm($article, $params, $method = 'POST')
    {
        foreach ($params as $param => $paramValue){
            if (null === $paramValue or 0 === strlen(trim($paramValue))){
                throw new \Exception("Invalid data: $param");
            }
        }

        if (!array_key_exists('authorId', $params)){
            throw new \Exception('Invalid data: authorId');
        }

        $user = $this->getDoctrine()
            ->getRepository(User::class)
            ->find($params['authorId']);

        if (null === $user){
            throw new \Exception('Invalid user id');
        }

        $form = $this->createForm(ArticleType::class, $article, ['method' => $method]);
        $form->submit($params);

        if ($form->isSubmitted()){
            $article->setAuthor($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $article;
        }

        throw new \Exception('Submitted data is invalid');
    }

    /**
     * @Route("/articles/{id}", name="rest_api_article_edit", methods={"PUT"})
     * @param Request $request
     * @return Response
     */
    public function editAction(Request $request, $id)
    {
        try{
            $article = $this->getDoctrine()
                ->getRepository(Article::class)
                ->find($id);
            if (null === $article){
                $this->createNewArticle($request);
                $statusCode = Response::HTTP_CREATED;
            }else{
                $this->processForm($article, $request->request->all(), 'PUT');
                $statusCode = Response::HTTP_NO_CONTENT;
            }

            return new Response(null, $statusCode);
        }catch (\Exception $exception){
            return new Response(json_encode(['error' => $exception->getMessage()]),
                Response::HTTP_BAD_REQUEST,
                ['content-type' => 'application/json']);
        }
    }

    /**
     * @Route("/articles/{id}", name="rest_api_article_delete", methods={"DELETE"})
     * @param Request $request
     * @return Response
     */
    public function deleteAction(Request $request, $id)
    {
        try{
            $article = $this->getDoctrine()
                ->getRepository(Article::class)
                ->find($id);

            if (null === $article){
                $statusCode = Response::HTTP_NOT_FOUND;
            }else{
                $em = $this->getDoctrine()->getManager();
                $em->remove($article);
                $em->flush();

                $statusCode = Response::HTTP_NO_CONTENT;
            }

            return new Response(null, $statusCode);

        }catch (\Exception $exception){
            return new Response(json_encode(['error' => $exception->getMessage()]),
                Response::HTTP_BAD_REQUEST,
                ['content-type' => 'application/json']);
        }
    }
}
