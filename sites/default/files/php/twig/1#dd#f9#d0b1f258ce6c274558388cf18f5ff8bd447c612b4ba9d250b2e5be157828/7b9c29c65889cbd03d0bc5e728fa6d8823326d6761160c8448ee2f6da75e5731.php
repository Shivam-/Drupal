<?php

/* core/modules/image/templates/image-scale-summary.html.twig */
class __TwigTemplate_ddf9d0b1f258ce6c274558388cf18f5ff8bd447c612b4ba9d250b2e5be157828 extends Twig_Template
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
        // line 19
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "width", array()) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "height", array()))) {
            // line 20
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "width", array()));
            echo "×";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "height", array()));
        } else {
            // line 22
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "width", array())) {
                // line 23
                echo "    ";
                echo t("width @data.width", array("@data.width" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "width", array()), ));
                // line 26
                echo "  ";
            } elseif ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "height", array())) {
                // line 27
                echo "    ";
                echo t("height @data.height", array("@data.height" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "height", array()), ));
                // line 30
                echo "  ";
            }
        }
        // line 32
        echo "
";
        // line 33
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "upscale", array())) {
            // line 34
            echo "  ";
            echo t("(upscaling allowed)", array());
        }
    }

    public function getTemplateName()
    {
        return "core/modules/image/templates/image-scale-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 34,  44 => 33,  41 => 32,  37 => 30,  34 => 27,  31 => 26,  28 => 23,  26 => 22,  21 => 20,  19 => 19,);
    }
}
