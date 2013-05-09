<?php

/* SdzBlogBundle:Blog:bye.html.twig */
class __TwigTemplate_5a87ade705ea6f4c6e83431302e0a737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo " 
<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma deuximème page avec le Site du Zéro !</title>
  </head>
  <body>
    <h1>Hello world</h1>
 
    <p>
      au revoir ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["qui"]) ? $context["qui"] : $this->getContext($context, "qui")), "html", null, true);
        echo "
    </p>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:bye.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 12,  19 => 2,);
    }
}
