<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/contrib/basecore/templates/node.html.twig */
class __TwigTemplate_f2aa86dc75da07f9bff736cdccf1e74f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta_area' => [$this, 'block_meta_area'],
            'libraries' => [$this, 'block_libraries'],
            'content' => [$this, 'block_content'],
            'node_side' => [$this, 'block_node_side'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "bundle", [], "any", false, false, true, 72))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 73)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 74)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 75)) ? ("node--unpublished") : ("")), ((        // line 76
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), ((        // line 77
($context["display_submitted"] ?? null)) ? ("node--display-submitted") : ("")), "clearfix"];
        // line 81
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("basecore/node"), "html", null, true);
        yield "
";
        // line 82
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("basecore/node-field"), "html", null, true);
        yield "
<article";
        // line 83
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 83), "html", null, true);
        yield ">
  <div class=\"node__container\">
    <div";
        // line 85
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__main-content", "clearfix"], "method", false, false, true, 85), "html", null, true);
        yield ">
      <header class=\"node__header\">
        ";
        // line 87
        yield from $this->unwrap()->yieldBlock('meta_area', $context, $blocks);
        // line 110
        yield "      </header>
      ";
        // line 111
        yield from $this->unwrap()->yieldBlock('libraries', $context, $blocks);
        // line 113
        yield "      ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 116
        yield "    </div>
    ";
        // line 117
        yield from $this->unwrap()->yieldBlock('node_side', $context, $blocks);
        // line 119
        yield "  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "display_submitted", "attributes", "content_attributes", "title_prefix", "page", "title_attributes", "url", "label", "title_suffix", "author_picture", "author_attributes", "author_name", "date", "metadata", "content"]);        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta_area(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 88
        yield "          ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
          ";
        // line 89
        if ( !($context["page"] ?? null)) {
            // line 90
            yield "            <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title"], "method", false, false, true, 90), "html", null, true);
            yield ">
              <a href=\"";
            // line 91
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</a>
            </h2>
          ";
        }
        // line 94
        yield "          ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
          ";
        // line 95
        if (($context["display_submitted"] ?? null)) {
            // line 96
            yield "            <div class=\"node__meta\">
              ";
            // line 97
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true);
            yield "
              <span";
            // line 98
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", ["node__submitted-info"], "method", false, false, true, 98), "html", null, true);
            yield ">
                ";
            // line 99
            yield t("<span class=\"node__submitted-info-text\">By</span> @author_name on
                  <span class=\"node__submitted-date\">
                    @date
                  </span>", array("@author_name" =>             // line 100
($context["author_name"] ?? null), "@date" =>             // line 102
($context["date"] ?? null), ));
            // line 105
            yield "              </span>
              ";
            // line 106
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true);
            yield "
            </div>
          ";
        }
        // line 109
        yield "        ";
        yield from [];
    }

    // line 111
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_libraries(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 112
        yield "      ";
        yield from [];
    }

    // line 113
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 114
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
      ";
        yield from [];
    }

    // line 117
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_node_side(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 118
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/basecore/templates/node.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  197 => 118,  190 => 117,  182 => 114,  175 => 113,  170 => 112,  163 => 111,  158 => 109,  152 => 106,  149 => 105,  147 => 102,  146 => 100,  142 => 99,  138 => 98,  134 => 97,  131 => 96,  129 => 95,  124 => 94,  116 => 91,  111 => 90,  109 => 89,  104 => 88,  97 => 87,  89 => 119,  87 => 117,  84 => 116,  81 => 113,  79 => 111,  76 => 110,  74 => 87,  69 => 85,  64 => 83,  60 => 82,  56 => 81,  54 => 77,  53 => 76,  52 => 75,  51 => 74,  50 => 73,  49 => 72,  48 => 70,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/basecore/templates/node.html.twig", "/var/www/html/web/themes/contrib/basecore/templates/node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 70, "block" => 87, "if" => 89, "trans" => 99];
        static $filters = ["clean_class" => 72, "escape" => 81];
        static $functions = ["attach_library" => 81];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'trans'],
                ['clean_class', 'escape'],
                ['attach_library'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
