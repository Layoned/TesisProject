<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* roleActions.twig.html */
class __TwigTemplate_d7a3c4aacfc0e7691c3bbf90da46c88f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
<h2>
    ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("Actions"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["role"] ?? null), "name", [], "any", false, false, false, 12)), "html", null, true);
        echo "
</h2>

";
        // line 15
        if ((($context["actionCount"] ?? null) < 1)) {
            // line 16
            echo "<div class=\"warning\">
    ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()("There are no records to display."), "html", null, true);
            echo "
</div>
";
        } else {
            // line 20
            echo "<div class=\"column-2 mb-8\">
";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["moduleName"] => $context["moduleActions"]) {
                // line 22
                echo "    <div class=\"column-no-break\">
        <h5 class=\"border-0 mb-1\">
            ";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()($context["moduleName"]), "html", null, true);
                echo "
        </h5>

        <ul>
        ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["moduleActions"]);
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 29
                    echo "            <li>
                <span title=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["action"], "description", [], "any", false, false, false, 30)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getFunction('__')->getCallable()(twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 30)), "html", null, true);
                    echo "</span>
            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "        </ul>
    </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['moduleName'], $context['moduleActions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "roleActions.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 36,  96 => 33,  85 => 30,  82 => 29,  78 => 28,  71 => 24,  67 => 22,  63 => 21,  60 => 20,  54 => 17,  51 => 16,  49 => 15,  41 => 12,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "roleActions.twig.html", "/var/www/html/gibbon/modules/User Admin/templates/roleActions.twig.html");
    }
}
