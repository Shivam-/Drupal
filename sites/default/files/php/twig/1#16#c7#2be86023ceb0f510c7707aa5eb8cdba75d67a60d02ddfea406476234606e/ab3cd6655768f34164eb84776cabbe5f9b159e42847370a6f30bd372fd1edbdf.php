<?php

/* {# inline_template_start #}{{ configuration_error_list }} */
class __TwigTemplate_16c72be86023ceb0f510c7707aa5eb8cdba75d67a60d02ddfea406476234606e extends Twig_Template
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
        // line 1
        echo twig_drupal_escape_filter($this->env, (isset($context["configuration_error_list"]) ? $context["configuration_error_list"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ configuration_error_list }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
