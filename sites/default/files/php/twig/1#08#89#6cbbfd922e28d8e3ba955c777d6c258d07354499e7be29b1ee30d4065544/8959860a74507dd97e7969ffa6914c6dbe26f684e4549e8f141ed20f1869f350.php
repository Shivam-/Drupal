<?php

/* core/modules/views_ui/templates/views-ui-view-info.html.twig */
class __TwigTemplate_08896cbbfd922e28d8e3ba955c777d6c258d07354499e7be29b1ee30d4065544 extends Twig_Template
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
        // line 15
        echo "<h3 class=\"views-ui-view-title views-table-filter-text-source\">";
        echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h3>
<div class=\"views-ui-view-displays\">";
        // line 16
        echo twig_drupal_escape_filter($this->env, (isset($context["displays"]) ? $context["displays"] : null), "html", null, true);
        echo "</div>
<div class=\"views-ui-view-machine-name\">
    ";
        // line 18
        echo t("Machine name:", array());
        // line 19
        echo "    <span class=\"views-table-filter-text-source\">";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "id", array()), "html", null, true);
        echo "</span>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-view-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 19,  29 => 18,  24 => 16,  19 => 15,);
    }
}
