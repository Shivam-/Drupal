<?php

/* core/modules/image/templates/image-style-preview.html.twig */
class __TwigTemplate_6dbe936d6e8b3353d93a60e055c5e3f170ab56daa49f65c4552fe9a62153bbda extends Twig_Template
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
        // line 33
        echo "<div class=\"image-style-preview preview clearfix\">
  ";
        // line 35
        echo "  <div class=\"preview-image-wrapper\">
      ";
        // line 36
        echo twig_render_var(t("original"));
        echo " (<a href=\"";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["original"]) ? $context["original"] : null), "url", array()), "html", null, true);
        echo "\">";
        echo twig_render_var(t("view actual size"));
        echo "</a>)
      <div class=\"preview-image original-image\" style=\"width: ";
        // line 37
        echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "original", array()), "width", array()), "html", null, true);
        echo "px; height: ";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "original", array()), "height", array()), "html", null, true);
        echo "px;\">
        <a href=\"";
        // line 38
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["original"]) ? $context["original"] : null), "url", array()), "html", null, true);
        echo "\">
          ";
        // line 39
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["original"]) ? $context["original"] : null), "rendered", array()), "html", null, true);
        echo "
        </a>
      <div class=\"height\" style=\"height: ";
        // line 41
        echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "original", array()), "height", array()), "html", null, true);
        echo "px\"><span>";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["original"]) ? $context["original"] : null), "height", array()), "html", null, true);
        echo "px</span></div>
      <div class=\"width\" style=\"width: ";
        // line 42
        echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "original", array()), "width", array()), "html", null, true);
        echo "px\"><span>";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["original"]) ? $context["original"] : null), "width", array()), "html", null, true);
        echo "px</span></div>
    </div>
  </div>

  ";
        // line 47
        echo "  <div class=\"preview-image-wrapper\">
    ";
        // line 48
        echo twig_drupal_escape_filter($this->env, (isset($context["style_name"]) ? $context["style_name"] : null), "html", null, true);
        echo " (<a href=\"";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["derivative"]) ? $context["derivative"] : null), "url", array()), "html", null, true);
        echo "?";
        echo twig_drupal_escape_filter($this->env, (isset($context["cache_bypass"]) ? $context["cache_bypass"] : null), "html", null, true);
        echo "\">";
        echo twig_render_var(t("view actual size"));
        echo "</a>)
    <div class=\"preview-image modified-image\" style=\"width: ";
        // line 49
        echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "derivative", array()), "width", array()), "html", null, true);
        echo "px; height: ";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "derivative", array()), "height", array()), "html", null, true);
        echo "px;\">
      <a href=\"";
        // line 50
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["derivative"]) ? $context["derivative"] : null), "url", array()), "html", null, true);
        echo "?";
        echo twig_drupal_escape_filter($this->env, (isset($context["cache_bypass"]) ? $context["cache_bypass"] : null), "html", null, true);
        echo "\">
        ";
        // line 51
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["derivative"]) ? $context["derivative"] : null), "rendered", array()), "html", null, true);
        echo "
      </a>
      <div class=\"height\" style=\"height: ";
        // line 53
        echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "derivative", array()), "height", array()), "html", null, true);
        echo "px\"><span>";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["derivative"]) ? $context["derivative"] : null), "height", array()), "html", null, true);
        echo "px</span></div>
      <div class=\"width\" style=\"width: ";
        // line 54
        echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "derivative", array()), "width", array()), "html", null, true);
        echo "px\"><span>";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["derivative"]) ? $context["derivative"] : null), "width", array()), "html", null, true);
        echo "px</span></div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/image/templates/image-style-preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 54,  93 => 53,  88 => 51,  82 => 50,  76 => 49,  66 => 48,  63 => 47,  54 => 42,  48 => 41,  43 => 39,  39 => 38,  33 => 37,  25 => 36,  22 => 35,  19 => 33,);
    }
}
