<?php

/* @classy/misc/status-messages.html.twig */
class __TwigTemplate_59accd533e70f4d1c54f318bf02ba4ba1f2365cc34283e268db54ff5c097af40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 28
        $this->displayBlock('messages', $context, $blocks);
    }

    public function block_messages($context, array $blocks = array())
    {
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 30
            echo "  ";
            // line 31
            $context["classes"] = array(0 => "messages", 1 => ("messages--" . $context["type"]));
            // line 36
            echo "  <div class=\"";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "class", array()), "html", null, true);
            echo "\" role=\"contentinfo\" aria-label=\"";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true);
            echo "\">
    ";
            // line 37
            if (($context["type"] == "error")) {
                // line 38
                echo "      <div role=\"alert\">
    ";
            }
            // line 40
            echo "      ";
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array")) {
                // line 41
                echo "        <h2 class=\"visually-hidden\">";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true);
                echo "</h2>
      ";
            }
            // line 43
            echo "      ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 44
                echo "        <ul class=\"messages__list\">
          ";
                // line 45
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 46
                    echo "            <li class=\"messages__item\">";
                    echo twig_drupal_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "        </ul>
      ";
            } else {
                // line 50
                echo "        ";
                echo twig_drupal_escape_filter($this->env, twig_first($this->env, $context["messages"]), "html", null, true);
                echo "
      ";
            }
            // line 52
            echo "    ";
            if (($context["type"] == "error")) {
                // line 53
                echo "      </div>
    ";
            }
            // line 55
            echo "  </div>
  ";
            // line 57
            echo "  ";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@classy/misc/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 57,  92 => 55,  88 => 53,  85 => 52,  79 => 50,  75 => 48,  66 => 46,  62 => 45,  59 => 44,  56 => 43,  50 => 41,  47 => 40,  43 => 38,  41 => 37,  34 => 36,  32 => 31,  30 => 30,  26 => 29,  20 => 28,);
    }
}
