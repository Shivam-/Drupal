<?php

/* core/themes/classy/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_8bef785cedb928e19f4043dd0fb1a08f63db3afd2537b23d0dd2af1fb6beb812 extends Twig_Template
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
        // line 18
        if ((isset($context["primary"]) ? $context["primary"] : null)) {
            // line 19
            echo "  <h2 class=\"visually-hidden\">";
            echo twig_render_var(t("Primary tabs"));
            echo "</h2>
  <ul class=\"tabs primary\">";
            // line 20
            echo twig_drupal_escape_filter($this->env, (isset($context["primary"]) ? $context["primary"] : null), "html", null, true);
            echo "</ul>
";
        }
        // line 22
        if ((isset($context["secondary"]) ? $context["secondary"] : null)) {
            // line 23
            echo "  <h2 class=\"visually-hidden\">";
            echo twig_render_var(t("Secondary tabs"));
            echo "</h2>
  <ul class=\"tabs secondary\">";
            // line 24
            echo twig_drupal_escape_filter($this->env, (isset($context["secondary"]) ? $context["secondary"] : null), "html", null, true);
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 24,  33 => 23,  31 => 22,  26 => 20,  21 => 19,  19 => 18,);
    }
}
