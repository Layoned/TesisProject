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

/* footer.twig.html */
class __TwigTemplate_ef368ef3553c05c3b31e454d79b71400 extends Template
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
        // line 25
        echo "
<footer style=\"text-align: center; padding: 20px; background-color: #f8f9fa;\">
    <div style=\"display: flex; justify-content: center; align-items: center;\">
        <span style=\"margin-right: 10px;\">Creado por</span>
        <a target=\"_blank\" href=\"\">
            <img src=\"themes/Default/img/Ayllu_full_logo.png\" alt=\"\" style=\"width: 115px; height: 20px;\">
        </a>
    </div>
    <br>
    <span>Copyright © Ayllu Corporation 2022 - 2024</span>
</footer>

";
    }

    public function getTemplateName()
    {
        return "footer.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.twig.html", "/var/www/html/gibbon/themes/Default/templates/footer.twig.html");
    }
}
