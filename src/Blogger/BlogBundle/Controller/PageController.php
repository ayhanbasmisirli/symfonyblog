<?php
namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function IndexAction()
    {
        return $this->render('BloggerBlogBundle:Page:index.html.twig');
    }
}