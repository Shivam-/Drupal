<?php

/* core/modules/system/templates/status-report.html.twig */
class __TwigTemplate_58eb0dbf3a5edb07779a906cd5efe7e9370541c41c12a60bd90a129e3f7afde8 extends Twig_Template
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
        echo "<table class=\"system-status-report\">
  <thead>
    <tr class=\"visually-hidden\">
      <th>";
        // line 23
        echo twig_render_var(t("Status"));
        echo "</th><th>";
        echo twig_render_var(t("Component"));
        echo "</th><th>";
        echo twig_render_var(t("Details"));
        echo "</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["requirements"]) ? $context["requirements"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
            // line 28
            echo "    ";
            if (twig_in_filter($this->getAttribute($context["requirement"], "severity_status", array()), array(0 => "warning", 1 => "error"))) {
                // line 29
                echo "      <tr class=\"color-";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["requirement"], "severity_status", array()), "html", null, true);
                echo "\">
    ";
            } else {
                // line 31
                echo "      <tr>
    ";
            }
            // line 33
            echo "        <td class=\"status-icon status-icon--";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["requirement"], "severity_status", array()), "html", null, true);
            echo "\">
          <div title=\"";
            // line 34
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["requirement"], "severity_title", array()), "html", null, true);
            echo "\">
            <span class=\"visually-hidden\">";
            // line 35
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["requirement"], "severity_title", array()), "html", null, true);
            echo "</span>
          </div>
        </td>
        <td class=\"status-title\">";
            // line 38
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["requirement"], "title", array()), "html", null, true);
            echo "</td>
        <td class=\"status-value\">
          ";
            // line 40
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["requirement"], "value", array()), "html", null, true);
            echo "
          ";
            // line 41
            if ($this->getAttribute($context["requirement"], "description", array())) {
                // line 42
                echo "            <div class=\"description\">";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["requirement"], "description", array()), "html", null, true);
                echo "</div>
          ";
            }
            // line 44
            echo "        </td>
      </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/status-report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 47,  84 => 44,  78 => 42,  76 => 41,  72 => 40,  67 => 38,  61 => 35,  57 => 34,  52 => 33,  48 => 31,  42 => 29,  39 => 28,  35 => 27,  24 => 23,  19 => 20,);
    }
}
