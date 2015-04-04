<?php

/* core/modules/system/templates/system-admin-index.html.twig */
class __TwigTemplate_15cf16b1fd7b6d351b7d165a6eb483a0a923cc42bcc4dbc9907a3976053627bd extends Twig_Template
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
        echo "<div class=\"admin clearfix\">
  ";
        // line 19
        echo twig_drupal_escape_filter($this->env, (isset($context["system_compact_link"]) ? $context["system_compact_link"] : null), "html", null, true);
        echo "
  ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["containers"]) ? $context["containers"] : null));
        foreach ($context['_seq'] as $context["position"] => $context["blocks"]) {
            // line 21
            echo "    <div class=\"";
            echo twig_drupal_escape_filter($this->env, $context["position"], "html", null, true);
            echo " clearfix\">
      ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["blocks"]);
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 23
                echo "        ";
                echo twig_drupal_escape_filter($this->env, $context["block"], "html", null, true);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['position'], $context['blocks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/system-admin-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 27,  48 => 25,  39 => 23,  35 => 22,  30 => 21,  26 => 20,  22 => 19,  19 => 18,);
    }
}
