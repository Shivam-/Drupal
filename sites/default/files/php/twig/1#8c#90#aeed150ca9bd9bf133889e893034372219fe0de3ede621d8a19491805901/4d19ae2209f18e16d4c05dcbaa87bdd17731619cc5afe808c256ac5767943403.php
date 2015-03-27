<?php

/* core/themes/classy/templates/content-edit/node-edit-form.html.twig */
class __TwigTemplate_8c90aeed150ca9bd9bf133889e893034372219fe0de3ede621d8a19491805901 extends Twig_Template
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
        // line 20
        echo "<div class=\"layout-node-form clearfix\">
  <div class=\"layout-region layout-region-node-main\">
    ";
        // line 22
        echo twig_drupal_escape_filter($this->env, twig_without((isset($context["form"]) ? $context["form"] : null), "advanced", "actions"), "html", null, true);
        echo "
  </div>
  <div class=\"layout-region layout-region-node-secondary\">
    ";
        // line 25
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "advanced", array()), "html", null, true);
        echo "
  </div>
  <div class=\"layout-region layout-region-node-footer\">
    ";
        // line 28
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "actions", array()), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/node-edit-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 28,  29 => 25,  23 => 22,  19 => 20,);
    }
}
