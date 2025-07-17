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

/* themes/contrib/basecore/templates/page.html.twig */
class __TwigTemplate_2e61b45baa9292a837c203dc84e65b8c extends Template
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
            'page_container' => [$this, 'block_page_container'],
            'page_top' => [$this, 'block_page_top'],
            'reading_progress_indicator' => [$this, 'block_reading_progress_indicator'],
            'internal_sticky_header' => [$this, 'block_internal_sticky_header'],
            'internal_banner' => [$this, 'block_internal_banner'],
            'main_content' => [$this, 'block_main_content'],
            'to_top' => [$this, 'block_to_top'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 83
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 83)) {
            // line 84
            yield "  ";
            // line 85
            yield "  <div class=\"clearfix slideout ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slideout_background_color"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
    ";
            // line 87
            yield "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 89), "html", null, true);
            yield "
      </div>
    </div>
    ";
            // line 93
            yield "  </div>
  ";
            // line 95
            yield "
  ";
            // line 97
            yield "  <button class=\"slideout-toggle slideout-toggle--fixed\"></button>
  ";
        }
        // line 100
        yield "
";
        // line 102
        yield "<div class=\"page-container\">

  ";
        // line 105
        yield "  ";
        yield from $this->unwrap()->yieldBlock('page_container', $context, $blocks);
        // line 639
        yield "  ";
        // line 640
        yield "
  ";
        // line 641
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sticky_footer", [], "any", false, false, true, 641)) {
            // line 642
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("basecore/sticky-footer-init"), "html", null, true);
            yield "
    ";
            // line 644
            yield "    <div class=\"sticky-footer-container\">
      <div class=\"";
            // line 645
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sticky_footer_layout_container"] ?? null), "html", null, true);
            yield "\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"collapsible-sticky-footer-trigger text-end\">
              <a class=\"";
            // line 649
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sticky_footer_background_color"] ?? null), "html", null, true);
            yield " mt-button m-0\" data-bs-toggle=\"collapse\" href=\"#collapsible-sticky-footer\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapsible-sticky-footer\">
                ";
            // line 650
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sticky_footer_trigger_text"] ?? null), "html", null, true);
            yield "
                <span class=\"ms-2 text-center collapsible-sticky-footer-icon collapsible-sticky-footer__expand-icon\"><i class=\"fas fa-angle-down m-0\"></i></span>
                <span class=\"ms-2 text-center collapsible-sticky-footer-icon collapsible-sticky-footer__collapse-icon\"><i class=\"fas fa-angle-up m-0\"></i></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class=\"clearfix sticky-footer ";
            // line 658
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sticky_footer_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sticky_footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sticky_footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
        <div class=\"";
            // line 659
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sticky_footer_layout_container"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 661
            yield "          <div class=\"clearfix sticky-footer__container\">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"collapse show\" id=\"collapsible-sticky-footer\">
                  ";
            // line 666
            yield "                  <div class=\"clearfix sticky-footer__section\">
                    ";
            // line 667
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sticky_footer", [], "any", false, false, true, 667), "html", null, true);
            yield "
                  </div>
                  ";
            // line 670
            yield "                </div>
              </div>
            </div>
          </div>
          ";
            // line 675
            yield "        </div>
      </div>
    </div>
    ";
            // line 679
            yield "    <div class=\"sticky-footer-placeholder\"></div>
  ";
        }
        // line 681
        yield "
  ";
        // line 682
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 682) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 682))) {
            // line 683
            yield "    ";
            // line 684
            yield "    <div ";
            if (($context["footer_top_id"] ?? null)) {
                yield "id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_top_id"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " class=\"clearfix footer-top ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_top_regions"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_top_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_top_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
      <div class=\"";
            // line 685
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_top_layout_container"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 687
            yield "        <div class=\"clearfix footer-top__container mt-style-custom-all";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            yield "\"
          ";
            // line 688
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 689
                yield "            data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_top_animation_effect"] ?? null), "html", null, true);
                yield "\"
          ";
            }
            // line 690
            yield ">
          <div class=\"row d-flex align-items-center\">
            ";
            // line 692
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 692)) {
                // line 693
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_top_first_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 695
                yield "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 696
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 696), "html", null, true);
                yield "
                </div>
                ";
                // line 699
                yield "              </div>
            ";
            }
            // line 701
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 701)) {
                // line 702
                yield "              <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_top_second_grid_class"] ?? null), "html", null, true);
                yield "\">
                ";
                // line 704
                yield "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 705
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 705), "html", null, true);
                yield "
                </div>
                ";
                // line 708
                yield "              </div>
            ";
            }
            // line 710
            yield "          </div>
        </div>
        ";
            // line 713
            yield "      </div>
    </div>
    ";
            // line 716
            yield "  ";
        }
        // line 717
        yield "
  ";
        // line 718
        yield from $this->unwrap()->yieldBlock('to_top', $context, $blocks);
        // line 725
        yield "
  ";
        // line 726
        if ((((((((((((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 726) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 726)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 726)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 726)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 726)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 726)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 726)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_third", [], "any", false, false, true, 726)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_fourth", [], "any", false, false, true, 726)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_first", [], "any", false, false, true, 726)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_second", [], "any", false, false, true, 726)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_third", [], "any", false, false, true, 726)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 726)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 726))) {
            // line 727
            yield "    <div class=\"footers-container\">

      ";
            // line 729
            if (((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 729) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 729)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 729)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 729)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 729))) {
                // line 730
                yield "        ";
                // line 731
                yield "        <footer ";
                if (($context["footer_id"] ?? null)) {
                    yield "id=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_id"] ?? null), "html", null, true);
                    yield "\"";
                }
                yield " class=\"clearfix footer ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_background_color"] ?? null), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_separator"] ?? null), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                yield "\">
          <div class=\"";
                // line 732
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_layout_container"] ?? null), "html", null, true);
                yield "\">
            <div class=\"clearfix footer__container\">
              <div class=\"row\">
                ";
                // line 735
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 735)) {
                    // line 736
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_first_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 738
                    yield "                    <div class=\"clearfix footer__section footer-first";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    yield "\"
                      ";
                    // line 739
                    if ((($context["footer_animations"] ?? null) == "enabled")) {
                        // line 740
                        yield "                        data-animate-effect=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true);
                        yield "\"
                      ";
                    }
                    // line 741
                    yield ">
                      ";
                    // line 742
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 742), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 745
                    yield "                  </div>
                ";
                }
                // line 747
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 747)) {
                    // line 748
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_second_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 750
                    yield "                    <div class=\"clearfix footer__section footer-second";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    yield "\"
                      ";
                    // line 751
                    if ((($context["footer_animations"] ?? null) == "enabled")) {
                        // line 752
                        yield "                        data-animate-effect=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true);
                        yield "\"
                      ";
                    }
                    // line 753
                    yield ">
                      ";
                    // line 754
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 754), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 757
                    yield "                  </div>
                ";
                }
                // line 759
                yield "                <div class=\"clearfix ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_4_columns_clearfix_first"] ?? null), "html", null, true);
                yield "\"></div>
                ";
                // line 760
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 760)) {
                    // line 761
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_third_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 763
                    yield "                    <div class=\"clearfix footer__section footer-third";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    yield "\"
                      ";
                    // line 764
                    if ((($context["footer_animations"] ?? null) == "enabled")) {
                        // line 765
                        yield "                        data-animate-effect=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true);
                        yield "\"
                      ";
                    }
                    // line 766
                    yield ">
                      ";
                    // line 767
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 767), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 770
                    yield "                  </div>
                ";
                }
                // line 772
                yield "                <div class=\"clearfix ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_4_columns_clearfix_second"] ?? null), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_5_columns_clearfix"] ?? null), "html", null, true);
                yield "\"></div>
                ";
                // line 773
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 773)) {
                    // line 774
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_fourth_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 776
                    yield "                    <div class=\"clearfix footer__section footer-fourth";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    yield "\"
                      ";
                    // line 777
                    if ((($context["footer_animations"] ?? null) == "enabled")) {
                        // line 778
                        yield "                        data-animate-effect=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true);
                        yield "\"
                      ";
                    }
                    // line 779
                    yield ">
                      ";
                    // line 780
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 780), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 783
                    yield "                  </div>
                ";
                }
                // line 785
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 785)) {
                    // line 786
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_fifth_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 788
                    yield "                    <div class=\"clearfix footer__section footer-fifth";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    yield "\"
                      ";
                    // line 789
                    if ((($context["footer_animations"] ?? null) == "enabled")) {
                        // line 790
                        yield "                        data-animate-effect=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true);
                        yield "\"
                      ";
                    }
                    // line 791
                    yield ">
                      ";
                    // line 792
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 792), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 795
                    yield "                  </div>
                ";
                }
                // line 797
                yield "              </div>
            </div>
          </div>
        </footer>
        ";
                // line 802
                yield "      ";
            }
            // line 803
            yield "
      ";
            // line 804
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 804) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 804)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_third", [], "any", false, false, true, 804)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_fourth", [], "any", false, false, true, 804))) {
                // line 805
                yield "        ";
                // line 806
                yield "        <div ";
                if (($context["footer_bottom_id"] ?? null)) {
                    yield "id=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_bottom_id"] ?? null), "html", null, true);
                    yield "\"";
                }
                yield " class=\"clearfix footer-bottom ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_bottom_background_color"] ?? null), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_bottom_separator"] ?? null), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                yield "\">
          <div class=\"";
                // line 807
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_bottom_layout_container"] ?? null), "html", null, true);
                yield "\">
            ";
                // line 809
                yield "            <div class=\"clearfix footer-bottom__container\">
              <div class=\"row\">
                ";
                // line 811
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 811)) {
                    // line 812
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_bottom_first_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    <div class=\"clearfix footer-bottom__section\">
                      ";
                    // line 814
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 814), "html", null, true);
                    yield "
                    </div>
                  </div>
                ";
                }
                // line 818
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 818)) {
                    // line 819
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_bottom_second_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    <div class=\"clearfix footer-bottom__section\">
                      ";
                    // line 821
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 821), "html", null, true);
                    yield "
                    </div>
                  </div>
                ";
                }
                // line 825
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_third", [], "any", false, false, true, 825)) {
                    // line 826
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_bottom_third_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    <div class=\"clearfix footer-bottom__section\">
                      ";
                    // line 828
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_third", [], "any", false, false, true, 828), "html", null, true);
                    yield "
                    </div>
                  </div>
                ";
                }
                // line 832
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_fourth", [], "any", false, false, true, 832)) {
                    // line 833
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_bottom_fourth_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    <div class=\"clearfix footer-bottom__section\">
                      ";
                    // line 835
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_fourth", [], "any", false, false, true, 835), "html", null, true);
                    yield "
                    </div>
                  </div>
                ";
                }
                // line 839
                yield "              </div>
            </div>
            ";
                // line 842
                yield "          </div>
        </div>
        ";
                // line 845
                yield "      ";
            }
            // line 846
            yield "
      ";
            // line 847
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_first", [], "any", false, false, true, 847) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_second", [], "any", false, false, true, 847)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_third", [], "any", false, false, true, 847))) {
                // line 848
                yield "        ";
                // line 849
                yield "        <div ";
                if (($context["subfooter_top_id"] ?? null)) {
                    yield "id=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_top_id"] ?? null), "html", null, true);
                    yield "\"";
                }
                yield " class=\"clearfix subfooter-top ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_top_background_color"] ?? null), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_top_separator"] ?? null), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                yield "\">
          <div class=\"";
                // line 850
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_top_layout_container"] ?? null), "html", null, true);
                yield "\">
            ";
                // line 852
                yield "            <div class=\"clearfix subfooter-top__container\">
              <div class=\"row align-items-center\">
                ";
                // line 854
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_first", [], "any", false, false, true, 854)) {
                    // line 855
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_top_first_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    <div class=\"clearfix subfooter-top__section\">
                      ";
                    // line 857
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_first", [], "any", false, false, true, 857), "html", null, true);
                    yield "
                    </div>
                  </div>
                ";
                }
                // line 861
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_second", [], "any", false, false, true, 861)) {
                    // line 862
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_top_second_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    <div class=\"clearfix subfooter-top__section\">
                      ";
                    // line 864
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_second", [], "any", false, false, true, 864), "html", null, true);
                    yield "
                    </div>
                  </div>
                ";
                }
                // line 868
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_third", [], "any", false, false, true, 868)) {
                    // line 869
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_top_third_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    <div class=\"clearfix subfooter-top__section\">
                      ";
                    // line 871
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_top_third", [], "any", false, false, true, 871), "html", null, true);
                    yield "
                    </div>
                  </div>
                ";
                }
                // line 875
                yield "              </div>
            </div>
            ";
                // line 878
                yield "          </div>
        </div>
        ";
                // line 881
                yield "      ";
            }
            // line 882
            yield "
      ";
            // line 883
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 883) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 883))) {
                // line 884
                yield "        ";
                // line 885
                yield "        <div ";
                if (($context["subfooter_id"] ?? null)) {
                    yield "id=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_id"] ?? null), "html", null, true);
                    yield "\"";
                }
                yield " class=\"clearfix subfooter ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_background_color"] ?? null), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_separator"] ?? null), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                yield "\">
          <div class=\"";
                // line 886
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_layout_container"] ?? null), "html", null, true);
                yield "\">
            ";
                // line 888
                yield "            <div class=\"clearfix subfooter__container\">
              <div class=\"row align-items-center\">
                ";
                // line 890
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 890)) {
                    // line 891
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_first_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 893
                    yield "                    <div class=\"clearfix subfooter__section subfooter-first\">
                      ";
                    // line 894
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 894), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 897
                    yield "                  </div>
                ";
                }
                // line 899
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 899)) {
                    // line 900
                    yield "                  <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["subfooter_second_grid_class"] ?? null), "html", null, true);
                    yield "\">
                    ";
                    // line 902
                    yield "                    <div class=\"clearfix subfooter__section subfooter-second\">
                      ";
                    // line 903
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 903), "html", null, true);
                    yield "
                    </div>
                    ";
                    // line 906
                    yield "                  </div>
                ";
                }
                // line 908
                yield "              </div>
            </div>
            ";
                // line 911
                yield "          </div>
        </div>
        ";
                // line 914
                yield "      ";
            }
            // line 915
            yield "
    </div>
  ";
        }
        // line 918
        yield "
  ";
        // line 919
        if ((($context["mobile_menu_widget_display"] ?? null) && ($context["mobile_search_enabled"] ?? null))) {
            // line 920
            yield "    ";
            // line 921
            yield "    <div class=\"clearfix mt-mobile-menu-widget-wrapper\">
      <div class=\"mt-mobile-menu-overlay\" style=\"display:none\">
        ";
            // line 923
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu_widget", [], "any", false, false, true, 923)) {
                // line 924
                yield "          <div class=\"mt-mobile-menu-overlay-content region--shade-background container-fluid pt-4\">
            <div class=\"row\">
              <div class=\"col-12\">
                ";
                // line 927
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu_widget", [], "any", false, false, true, 927), "html", null, true);
                yield "
              </div>
            </div>
          </div>
        ";
            }
            // line 932
            yield "        <button type=\"button\" class=\"mt-dismiss-button mt-button region--shade-background ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["mobile_menu_widget_sticky"] ?? null)) ? ("mt-dismiss-button--sticky") : ("")));
            yield "\">
          <span class=\"sr-only\">";
            // line 933
            yield t("Dismiss mobile overlay area", array());
            yield "</span><i class=\"fas fa-times\"></i>
        </button>
      </div>

      ";
            // line 938
            yield "      <form method=\"get\" action=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl(($context["default_search_route"] ?? null)));
            yield "\">
        <div class=\"clearfix mt-mobile-menu-widget mt-container ";
            // line 939
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["mobile_menu_widget_sticky"] ?? null)) ? ("mt-sticky") : ("")));
            yield "\">
          <div class=\"mt-search-icon\">
            <i class=\"fas fa-search\"></i>
          </div>
          <input type=\"text\" name=\"keys\" class=\"mt-input\" placeholder=\"Search...\">
          <div class=\"mt-clear-icon\">
            <span class=\"sr-only\">";
            // line 945
            yield t("Clear keys input element", array());
            yield "</span><i class=\"fas fa-times-circle\"></i>
          </div>
          <button type=\"submit\" class=\"mt-submit-button mt-button\">
            <span class=\"sr-only\">";
            // line 948
            yield t("Submit search", array());
            yield "</span><i class=\"fas fa-arrow-right\"></i>
          </button>
          <button type=\"button\" class=\"mt-menu-button mt-button\">
            <span class=\"sr-only\">";
            // line 951
            yield t("Open mobile overlay area", array());
            yield "</span><i class=\"fas fa-bars\"></i>
          </button>
        </div>
      </form>
    </div>
  ";
        }
        // line 957
        yield "  ";
        // line 958
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "slideout_background_color", "slideout_blocks_paddings", "slideout_region_paddings", "sticky_footer_layout_container", "sticky_footer_background_color", "sticky_footer_trigger_text", "sticky_footer_blocks_paddings", "sticky_footer_region_paddings", "footer_top_id", "footer_top_regions", "footer_top_background_color", "footer_top_separator", "footer_top_blocks_paddings", "footer_top_region_paddings", "footer_top_layout_container", "footer_top_animations", "footer_top_animation_effect", "footer_top_first_grid_class", "footer_top_second_grid_class", "footer_id", "footer_background_color", "footer_separator", "footer_blocks_paddings", "footer_region_paddings", "footer_layout_container", "footer_first_grid_class", "footer_animations", "footer_animation_effect", "footer_second_grid_class", "footer_4_columns_clearfix_first", "footer_third_grid_class", "footer_4_columns_clearfix_second", "footer_5_columns_clearfix", "footer_fourth_grid_class", "footer_fifth_grid_class", "footer_bottom_id", "footer_bottom_background_color", "footer_bottom_separator", "footer_bottom_blocks_paddings", "footer_bottom_region_paddings", "footer_bottom_layout_container", "footer_bottom_first_grid_class", "footer_bottom_second_grid_class", "footer_bottom_third_grid_class", "footer_bottom_fourth_grid_class", "subfooter_top_id", "subfooter_top_background_color", "subfooter_top_separator", "subfooter_top_blocks_paddings", "subfooter_top_region_paddings", "subfooter_top_layout_container", "subfooter_top_first_grid_class", "subfooter_top_second_grid_class", "subfooter_top_third_grid_class", "subfooter_id", "subfooter_background_color", "subfooter_separator", "subfooter_blocks_paddings", "subfooter_region_paddings", "subfooter_layout_container", "subfooter_first_grid_class", "subfooter_second_grid_class", "mobile_menu_widget_display", "mobile_search_enabled", "mobile_menu_widget_sticky", "default_search_route", "content_top_id", "content_top_background_color", "content_top_blocks_paddings", "content_top_region_paddings", "content_top_layout_container", "content_top_animations", "content_top_animation_effect", "content_top_highlighted_id", "content_top_highlighted_background_color", "content_top_highlighted_separator", "content_top_highlighted_blocks_paddings", "content_top_highlighted_region_paddings", "content_top_highlighted_layout_container", "content_top_highlighted_animations", "content_top_highlighted_animation_effect", "content_bottom_id", "content_bottom_background_color", "content_bottom_separator", "content_bottom_blocks_paddings", "content_bottom_region_paddings", "content_bottom_layout_container", "content_bottom_animations", "content_bottom_animation_effect", "content_bottom_first_grid_class", "content_bottom_second_grid_class", "content_bottom_highlighted_id", "content_bottom_highlighted_background_color", "content_bottom_highlighted_separator", "content_bottom_highlighted_blocks_paddings", "content_bottom_highlighted_region_paddings", "content_bottom_highlighted_layout_container", "content_bottom_highlighted_animations", "content_bottom_highlighted_animation_effect", "featured_top_id", "featured_top_background_color", "featured_top_separator", "featured_top_blocks_paddings", "featured_top_region_paddings", "featured_top_layout_container", "featured_top_animations", "featured_top_animation_effect", "featured_id", "featured_background_color", "featured_separator", "featured_blocks_paddings", "featured_region_paddings", "featured_layout_container", "featured_animations", "featured_animation_effect", "featured_bottom_id", "featured_bottom_background_color", "featured_bottom_separator", "featured_bottom_blocks_paddings", "featured_bottom_region_paddings", "featured_bottom_layout_container", "featured_bottom_animations", "featured_bottom_animation_effect", "sub_featured_id", "sub_featured_background_color", "sub_featured_separator", "sub_featured_blocks_paddings", "sub_featured_region_paddings", "sub_featured_layout_container", "sub_featured_animations", "sub_featured_animation_effect", "highlighted_top_id", "highlighted_top_background_color", "highlighted_top_separator", "highlighted_top_blocks_paddings", "highlighted_top_region_paddings", "highlighted_top_layout_container", "highlighted_top_animations", "highlighted_top_animation_effect", "highlighted_id", "highlighted_background_color", "highlighted_separator", "highlighted_blocks_paddings", "highlighted_region_paddings", "highlighted_layout_container", "highlighted_animations", "highlighted_animation_effect", "post_progress", "header_top_highlighted_background_color", "header_top_highlighted_blocks_paddings", "header_top_highlighted_region_paddings", "header_top_highlighted_layout_container", "header_horizontal_paddings", "header_top_highlighted_animations", "header_top_highlighted_animation_effect", "header_top_highlighted_first_grid_class", "header_top_highlighted_second_grid_class", "header_top_background_color", "header_top_blocks_paddings", "header_top_region_paddings", "header_top_layout_container", "header_top_animations", "header_top_animation_effect", "header_top_first_grid_class", "header_top_second_grid_class", "header_background_color", "header_layout_container_class", "header_layout_columns_class", "header_blocks_paddings", "header_region_paddings", "header_layout_container", "header_first_grid_class", "header_second_grid_class", "slideout_mobile_menu_display", "header_third_grid_class", "banner_id", "banner_background_color", "banner_blocks_paddings", "banner_region_paddings", "banner_layout_container", "hero_id", "hero_background_color", "hero_blocks_paddings", "hero_region_paddings", "hero_layout_container", "hero_animations", "hero_animation_effect", "hero_first_grid_class", "hero_second_grid_class", "hero_third_grid_class", "hero_top_id", "hero_top_background_color", "hero_top_blocks_paddings", "hero_top_region_paddings", "hero_top_layout_container", "hero_top_animations", "hero_top_animation_effect", "main_content_id", "main_content_background_color", "main_content_separator", "main_content_layout_container", "main_grid_class", "main_content_paddings", "main_content_animations", "main_content_blocks_paddings", "main_content_region_paddings", "main_content_animation_effect", "sidebar_first_grid_class", "sidebar_paddings", "sidebar_first_animations", "sidebar_first_blocks_paddings", "sidebar_first_region_paddings", "sidebar_first_animation_effect", "sidebar_second_grid_class", "sidebar_second_animations", "sidebar_second_blocks_paddings", "sidebar_second_region_paddings", "sidebar_second_animation_effect", "scroll_to_top_display", "scroll_to_top_icon"]);        yield from [];
    }

    // line 105
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_container(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 106
        yield "
    ";
        // line 107
        yield from $this->unwrap()->yieldBlock('page_top', $context, $blocks);
        // line 333
        yield "
    ";
        // line 334
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 334)) {
            // line 335
            yield "      <div class=\"system-messages clearfix\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-12\">
              ";
            // line 339
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 339), "html", null, true);
            yield "
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 345
        yield "
    ";
        // line 346
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 346)) {
            // line 347
            yield "      ";
            // line 348
            yield "      <div ";
            if (($context["content_top_id"] ?? null)) {
                yield "id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_id"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " class=\"clearfix content-top ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_background_color"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
        <div class=\"";
            // line 349
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_layout_container"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 351
            yield "          <div class=\"clearfix content-top__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            yield "\"
            ";
            // line 352
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 353
                yield "              data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_animation_effect"] ?? null), "html", null, true);
                yield "\"
            ";
            }
            // line 354
            yield ">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"content-top__section\">
                  ";
            // line 358
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 358), "html", null, true);
            yield "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 364
            yield "        </div>
      </div>
      ";
            // line 367
            yield "    ";
        }
        // line 368
        yield "
    ";
        // line 369
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 369)) {
            // line 370
            yield "      ";
            // line 371
            yield "      <div ";
            if (($context["content_top_highlighted_id"] ?? null)) {
                yield "id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_highlighted_id"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " class=\"clearfix content-top-highlighted ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_highlighted_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_highlighted_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
        <div class=\"";
            // line 372
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_highlighted_layout_container"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 374
            yield "          <div class=\"clearfix content-top-highlighted__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            yield "\"
            ";
            // line 375
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 376
                yield "              data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_top_highlighted_animation_effect"] ?? null), "html", null, true);
                yield "\"
            ";
            }
            // line 377
            yield ">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"content-top-highlighted__section\">
                  ";
            // line 381
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 381), "html", null, true);
            yield "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 387
            yield "        </div>
      </div>
      ";
            // line 390
            yield "    ";
        }
        // line 391
        yield "
    ";
        // line 393
        yield "    ";
        yield from $this->unwrap()->yieldBlock('main_content', $context, $blocks);
        // line 439
        yield "    ";
        // line 440
        yield "
    ";
        // line 441
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 441) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 441))) {
            // line 442
            yield "      ";
            // line 443
            yield "      <div ";
            if (($context["content_bottom_id"] ?? null)) {
                yield "id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_id"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " class=\"clearfix content-bottom ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
        <div class=\"";
            // line 444
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_layout_container"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 446
            yield "          <div class=\"clearfix content-bottom__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            yield "\"
            ";
            // line 447
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 448
                yield "              data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_animation_effect"] ?? null), "html", null, true);
                yield "\"
            ";
            }
            // line 449
            yield ">
            <div class=\"row\">
              ";
            // line 451
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 451)) {
                // line 452
                yield "                <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_first_grid_class"] ?? null), "html", null, true);
                yield "\">
                  ";
                // line 454
                yield "                  <div class=\"clearfix content-bottom__section content-bottom-first\">
                    ";
                // line 455
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 455), "html", null, true);
                yield "
                  </div>
                  ";
                // line 458
                yield "                </div>
              ";
            }
            // line 460
            yield "              ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 460)) {
                // line 461
                yield "                <div class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_second_grid_class"] ?? null), "html", null, true);
                yield "\">
                  ";
                // line 463
                yield "                  <div class=\"clearfix content-bottom__section content-bottom-second\">
                    ";
                // line 464
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 464), "html", null, true);
                yield "
                  </div>
                  ";
                // line 467
                yield "                </div>
              ";
            }
            // line 469
            yield "            </div>
          </div>
          ";
            // line 472
            yield "        </div>
      </div>
      ";
            // line 475
            yield "    ";
        }
        // line 476
        yield "
    ";
        // line 477
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_highlighted", [], "any", false, false, true, 477)) {
            // line 478
            yield "      ";
            // line 479
            yield "      <div ";
            if (($context["content_bottom_highlighted_id"] ?? null)) {
                yield "id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_highlighted_id"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " class=\"clearfix content-bottom-highlighted ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_highlighted_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_highlighted_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
        <div class=\"";
            // line 480
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_highlighted_layout_container"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 482
            yield "          <div class=\"clearfix content-bottom-highlighted__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_bottom_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            yield "\"
            ";
            // line 483
            if ((($context["content_bottom_highlighted_animations"] ?? null) == "enabled")) {
                // line 484
                yield "              data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_bottom_highlighted_animation_effect"] ?? null), "html", null, true);
                yield "\"
            ";
            }
            // line 485
            yield ">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"content-bottom-highlighted__section\">
                  ";
            // line 489
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_highlighted", [], "any", false, false, true, 489), "html", null, true);
            yield "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 495
            yield "        </div>
      </div>
      ";
            // line 498
            yield "    ";
        }
        // line 499
        yield "
    ";
        // line 500
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 500)) {
            // line 501
            yield "      ";
            // line 502
            yield "      <div ";
            if (($context["featured_top_id"] ?? null)) {
                yield "id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_top_id"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " class=\"clearfix featured-top ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_top_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_top_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
        <div class=\"";
            // line 503
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_top_layout_container"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 505
            yield "          <div class=\"clearfix featured-top__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            yield "\"
            ";
            // line 506
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 507
                yield "              data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_top_animation_effect"] ?? null), "html", null, true);
                yield "\"
            ";
            }
            // line 508
            yield ">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"clearfix featured-top__section\">
                  ";
            // line 512
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 512), "html", null, true);
            yield "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 518
            yield "        </div>
      </div>
      ";
            // line 521
            yield "    ";
        }
        // line 522
        yield "
    ";
        // line 523
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 523)) {
            // line 524
            yield "      ";
            // line 525
            yield "      <div ";
            if (($context["featured_id"] ?? null)) {
                yield "id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_id"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " class=\"clearfix featured ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
        <div class=\"";
            // line 526
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_layout_container"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 528
            yield "          <div class=\"clearfix featured__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            yield "\"
            ";
            // line 529
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 530
                yield "              data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_animation_effect"] ?? null), "html", null, true);
                yield "\"
            ";
            }
            // line 531
            yield ">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"clearfix featured__section\">
                  ";
            // line 535
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 535), "html", null, true);
            yield "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 541
            yield "        </div>
      </div>
      ";
            // line 544
            yield "    ";
        }
        // line 545
        yield "
    ";
        // line 546
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 546)) {
            // line 547
            yield "      ";
            // line 548
            yield "      <div ";
            if (($context["featured_bottom_id"] ?? null)) {
                yield "id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_bottom_id"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " class=\"clearfix featured-bottom ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_bottom_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_bottom_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
        <div class=\"";
            // line 549
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_bottom_layout_container"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 551
            yield "          <div class=\"clearfix featured-bottom__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            yield "\"
            ";
            // line 552
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 553
                yield "              data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["featured_bottom_animation_effect"] ?? null), "html", null, true);
                yield "\"
            ";
            }
            // line 554
            yield ">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"clearfix featured-bottom__section\">
                  ";
            // line 558
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 558), "html", null, true);
            yield "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 564
            yield "        </div>
      </div>
      ";
            // line 567
            yield "    ";
        }
        // line 568
        yield "
    ";
        // line 569
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 569)) {
            // line 570
            yield "      ";
            // line 571
            yield "      <div ";
            if (($context["sub_featured_id"] ?? null)) {
                yield "id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sub_featured_id"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " class=\"clearfix sub-featured ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sub_featured_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sub_featured_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
        <div class=\"";
            // line 572
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sub_featured_layout_container"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 574
            yield "          <div class=\"clearfix sub-featured__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            yield "\"
            ";
            // line 575
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 576
                yield "              data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sub_featured_animation_effect"] ?? null), "html", null, true);
                yield "\"
            ";
            }
            // line 577
            yield ">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"clearfix sub-featured__section\">
                  ";
            // line 581
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 581), "html", null, true);
            yield "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 587
            yield "        </div>
      </div>
      ";
            // line 590
            yield "    ";
        }
        // line 591
        yield "
    ";
        // line 592
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 592)) {
            // line 593
            yield "      ";
            // line 594
            yield "      <div ";
            if (($context["highlighted_top_id"] ?? null)) {
                yield "id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_top_id"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " class=\"clearfix highlighted-top ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_top_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_top_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
        <div class=\"";
            // line 595
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_top_layout_container"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 597
            yield "          <div class=\"clearfix highlighted-top__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            yield "\"
            ";
            // line 598
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 599
                yield "              data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_top_animation_effect"] ?? null), "html", null, true);
                yield "\"
            ";
            }
            // line 600
            yield ">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"clearfix highlighted-top__section\">
                  ";
            // line 604
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 604), "html", null, true);
            yield "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 610
            yield "        </div>
      </div>
      ";
            // line 613
            yield "    ";
        }
        // line 614
        yield "
    ";
        // line 615
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 615)) {
            // line 616
            yield "      ";
            // line 617
            yield "      <div ";
            if (($context["highlighted_id"] ?? null)) {
                yield "id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_id"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " class=\"clearfix highlighted ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_separator"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
        <div class=\"";
            // line 618
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_layout_container"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 620
            yield "          <div class=\"clearfix highlighted__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            yield "\"
            ";
            // line 621
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 622
                yield "              data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["highlighted_animation_effect"] ?? null), "html", null, true);
                yield "\"
            ";
            }
            // line 623
            yield ">
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"clearfix highlighted__section\">
                  ";
            // line 627
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 627), "html", null, true);
            yield "
                </div>
              </div>
            </div>
          </div>
          ";
            // line 633
            yield "        </div>
      </div>
      ";
            // line 636
            yield "    ";
        }
        // line 637
        yield "
  ";
        yield from [];
    }

    // line 107
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_top(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 108
        yield "      ";
        if (((((((((((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 108) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 108)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 108)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 108)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 108)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 108)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 108)) || ($context["post_progress"] ?? null)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 108)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 108)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 108)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 108)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 108))) {
            // line 109
            yield "      <div class=\"page-top-container\">
        ";
            // line 110
            if ((((((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 110) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 110)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 110)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 110)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 110)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 110)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 110)) || ($context["post_progress"] ?? null))) {
                // line 111
                yield "          ";
                // line 112
                yield "          <div class=\"header-container\">

            ";
                // line 114
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 114) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 114))) {
                    // line 115
                    yield "              ";
                    // line 116
                    yield "              <div class=\"clearfix header-top-highlighted ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_highlighted_background_color"] ?? null), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                    yield "\">
                <div class=\"";
                    // line 117
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_highlighted_layout_container"] ?? null), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_horizontal_paddings"] ?? null), "html", null, true);
                    yield "\">
                  ";
                    // line 119
                    yield "                  <div class=\"clearfix header-top-highlighted__container";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    yield "\"
                    ";
                    // line 120
                    if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                        // line 121
                        yield "                      data-animate-effect=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_highlighted_animation_effect"] ?? null), "html", null, true);
                        yield "\"
                    ";
                    }
                    // line 122
                    yield ">
                    <div class=\"row d-flex align-items-center\">
                      ";
                    // line 124
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 124)) {
                        // line 125
                        yield "                        <div class=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_highlighted_first_grid_class"] ?? null), "html", null, true);
                        yield "\">
                          ";
                        // line 127
                        yield "                          <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                            ";
                        // line 128
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 128), "html", null, true);
                        yield "
                          </div>
                          ";
                        // line 131
                        yield "                        </div>
                      ";
                    }
                    // line 133
                    yield "                      ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 133)) {
                        // line 134
                        yield "                        <div class=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_highlighted_second_grid_class"] ?? null), "html", null, true);
                        yield "\">
                          ";
                        // line 136
                        yield "                          <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                            ";
                        // line 137
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 137), "html", null, true);
                        yield "
                          </div>
                          ";
                        // line 140
                        yield "                        </div>
                      ";
                    }
                    // line 142
                    yield "                    </div>
                  </div>
                  ";
                    // line 145
                    yield "                </div>
              </div>
              ";
                    // line 148
                    yield "            ";
                }
                // line 149
                yield "
            ";
                // line 150
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 150) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 150))) {
                    // line 151
                    yield "              ";
                    // line 152
                    yield "              <div class=\"clearfix header-top ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_background_color"] ?? null), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                    yield "\">
                <div class=\"";
                    // line 153
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_layout_container"] ?? null), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_horizontal_paddings"] ?? null), "html", null, true);
                    yield "\">
                  ";
                    // line 155
                    yield "                  <div class=\"clearfix header-top__container";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                    yield "\"
                    ";
                    // line 156
                    if ((($context["header_top_animations"] ?? null) == "enabled")) {
                        // line 157
                        yield "                      data-animate-effect=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_animation_effect"] ?? null), "html", null, true);
                        yield "\"
                    ";
                    }
                    // line 158
                    yield ">
                    <div class=\"row\">
                      ";
                    // line 160
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 160)) {
                        // line 161
                        yield "                        <div class=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_first_grid_class"] ?? null), "html", null, true);
                        yield "\">
                          ";
                        // line 163
                        yield "                          <div class=\"clearfix header-top__section header-top-first\">
                            ";
                        // line 164
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 164), "html", null, true);
                        yield "
                          </div>
                          ";
                        // line 167
                        yield "                        </div>
                      ";
                    }
                    // line 169
                    yield "                      ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 169)) {
                        // line 170
                        yield "                        <div class=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_top_second_grid_class"] ?? null), "html", null, true);
                        yield "\">
                          ";
                        // line 172
                        yield "                          <div class=\"clearfix header-top__section header-top-second\">
                            ";
                        // line 173
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 173), "html", null, true);
                        yield "
                          </div>
                          ";
                        // line 176
                        yield "                        </div>
                      ";
                    }
                    // line 178
                    yield "                    </div>
                  </div>
                  ";
                    // line 181
                    yield "                </div>
              </div>
              ";
                    // line 184
                    yield "            ";
                }
                // line 185
                yield "
            ";
                // line 186
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 186) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 186)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 186))) {
                    // line 187
                    yield "              ";
                    // line 188
                    yield "              ";
                    yield from $this->unwrap()->yieldBlock('reading_progress_indicator', $context, $blocks);
                    // line 190
                    yield "              <header role=\"banner\" class=\"clearfix header ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_background_color"] ?? null), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_layout_container_class"] ?? null), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_layout_columns_class"] ?? null), "html", null, true);
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                    yield "\">
                <div class=\"";
                    // line 191
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_layout_container"] ?? null), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_horizontal_paddings"] ?? null), "html", null, true);
                    yield "\">
                  ";
                    // line 193
                    yield "                  <div class=\"clearfix header__container\">
                    <div class=\"row align-items-center\">
                      ";
                    // line 195
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 195)) {
                        // line 196
                        yield "                        <div class=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_first_grid_class"] ?? null), "html", null, true);
                        yield "\">
                          ";
                        // line 198
                        yield "                          <div class=\"clearfix header__section header-first\">
                            ";
                        // line 199
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 199), "html", null, true);
                        yield "
                          </div>
                          ";
                        // line 202
                        yield "                        </div>
                      ";
                    }
                    // line 204
                    yield "                      ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 204)) {
                        // line 205
                        yield "                        <div class=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_second_grid_class"] ?? null), "html", null, true);
                        yield "\">
                          ";
                        // line 207
                        yield "                          <div class=\"clearfix header__section header-second";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_mobile_menu_display"] ?? null)) ? (" d-none d-md-block") : ("")));
                        yield "\">
                            ";
                        // line 208
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 208), "html", null, true);
                        yield "
                          </div>
                          ";
                        // line 211
                        yield "                        </div>
                      ";
                    }
                    // line 213
                    yield "                      ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 213)) {
                        // line 214
                        yield "                        <div class=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_third_grid_class"] ?? null), "html", null, true);
                        yield "\">
                          ";
                        // line 216
                        yield "                          <div class=\"clearfix header__section header-third\">
                            ";
                        // line 217
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 217), "html", null, true);
                        yield "
                          </div>
                          ";
                        // line 220
                        yield "                        </div>
                      ";
                    }
                    // line 222
                    yield "                    </div>
                  </div>
                  ";
                    // line 225
                    yield "                </div>
              </header>
              ";
                    // line 228
                    yield "            ";
                }
                // line 229
                yield "
          </div>
          ";
                // line 232
                yield "        ";
            }
            // line 233
            yield "
        ";
            // line 234
            yield from $this->unwrap()->yieldBlock('internal_sticky_header', $context, $blocks);
            // line 236
            yield "
        ";
            // line 237
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 237)) {
                // line 238
                yield "          ";
                // line 239
                yield "          <div ";
                if (($context["banner_id"] ?? null)) {
                    yield "id=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["banner_id"] ?? null), "html", null, true);
                    yield "\"";
                }
                yield " class=\"clearfix banner ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["banner_background_color"] ?? null), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                yield "\">
            <div class=\"";
                // line 240
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["banner_layout_container"] ?? null), "html", null, true);
                yield "\">
              ";
                // line 242
                yield "              <div class=\"clearfix banner__container\">
                <div class=\"row\">
                  <div class=\"col-12\">
                    <div class=\"banner__section\">
                      ";
                // line 246
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 246), "html", null, true);
                yield "
                    </div>
                  </div>
                </div>
              </div>
              ";
                // line 252
                yield "            </div>
          </div>
          ";
                // line 255
                yield "        ";
            }
            // line 256
            yield "
        ";
            // line 257
            yield from $this->unwrap()->yieldBlock('internal_banner', $context, $blocks);
            // line 284
            yield "
        ";
            // line 285
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 285) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 285)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 285))) {
                // line 286
                yield "          ";
                // line 287
                yield "          <div ";
                if (($context["hero_id"] ?? null)) {
                    yield "id=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["hero_id"] ?? null), "html", null, true);
                    yield "\"";
                }
                yield " class=\"clearfix hero ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["hero_background_color"] ?? null), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                yield "\">
            <div class=\"";
                // line 288
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["hero_layout_container"] ?? null), "html", null, true);
                yield "\">
              ";
                // line 290
                yield "              <div class=\"clearfix hero__container";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["hero_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                yield "\"
                ";
                // line 291
                if ((($context["hero_animations"] ?? null) == "enabled")) {
                    // line 292
                    yield "                  data-animate-effect=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["hero_animation_effect"] ?? null), "html", null, true);
                    yield "\"
                ";
                }
                // line 293
                yield ">
                <div class=\"row\">
                  ";
                // line 295
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 295)) {
                    // line 296
                    yield "                    <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["hero_first_grid_class"] ?? null), "html", null, true);
                    yield "\">
                      ";
                    // line 298
                    yield "                      <div class=\"clearfix hero__section hero-first\">
                        ";
                    // line 299
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero_first", [], "any", false, false, true, 299), "html", null, true);
                    yield "
                      </div>
                      ";
                    // line 302
                    yield "                    </div>
                  ";
                }
                // line 304
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 304)) {
                    // line 305
                    yield "                    <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["hero_second_grid_class"] ?? null), "html", null, true);
                    yield "\">
                      ";
                    // line 307
                    yield "                      <div class=\"clearfix hero__section hero-second\">
                        ";
                    // line 308
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero_second", [], "any", false, false, true, 308), "html", null, true);
                    yield "
                      </div>
                      ";
                    // line 311
                    yield "                    </div>
                  ";
                }
                // line 313
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 313)) {
                    // line 314
                    yield "                    <div class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["hero_third_grid_class"] ?? null), "html", null, true);
                    yield "\">
                      ";
                    // line 316
                    yield "                      <div class=\"clearfix hero__section hero-third\">
                        ";
                    // line 317
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero_third", [], "any", false, false, true, 317), "html", null, true);
                    yield "
                      </div>
                      ";
                    // line 320
                    yield "                    </div>
                  ";
                }
                // line 322
                yield "                </div>
              </div>
              ";
                // line 325
                yield "            </div>
          </div>
          ";
                // line 328
                yield "        ";
            }
            // line 329
            yield "
      </div>
      ";
        }
        // line 332
        yield "    ";
        yield from [];
    }

    // line 188
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_reading_progress_indicator(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 189
        yield "              ";
        yield from [];
    }

    // line 234
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_internal_sticky_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 235
        yield "        ";
        yield from [];
    }

    // line 257
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_internal_banner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 258
        yield "          ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 258)) {
            // line 259
            yield "            <div class=\"internal-banner-container\">
              ";
            // line 260
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("basecore/banner-area"), "html", null, true);
            yield "
              ";
            // line 262
            yield "              <div ";
            if (($context["hero_top_id"] ?? null)) {
                yield "id=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["hero_top_id"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " class=\"clearfix hero-top d-flex align-items-center ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["hero_top_background_color"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["hero_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\">
                <div class=\"";
            // line 263
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["hero_top_layout_container"] ?? null), "html", null, true);
            yield "\">
                  ";
            // line 265
            yield "                  <div class=\"clearfix hero-top__container";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["hero_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            yield "\"
                    ";
            // line 266
            if ((($context["hero_top_animations"] ?? null) == "enabled")) {
                // line 267
                yield "                      data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["hero_top_animation_effect"] ?? null), "html", null, true);
                yield "\"
                    ";
            }
            // line 268
            yield ">
                    <div class=\"row\">
                      <div class=\"col-12\">
                        <div class=\"hero-top__section\">
                          ";
            // line 272
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero_top", [], "any", false, false, true, 272), "html", null, true);
            yield "
                        </div>
                      </div>
                    </div>
                  </div>
                  ";
            // line 278
            yield "                </div>
              </div>
              ";
            // line 281
            yield "            </div>
          ";
        }
        // line 283
        yield "        ";
        yield from [];
    }

    // line 393
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 394
        yield "      <div ";
        if (($context["main_content_id"] ?? null)) {
            yield "id=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_content_id"] ?? null), "html", null, true);
            yield "\"";
        }
        yield " class=\"clearfix main-content ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_content_background_color"] ?? null), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_content_separator"] ?? null), "html", null, true);
        yield "\">
        <div class=\"";
        // line 395
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_content_layout_container"] ?? null), "html", null, true);
        yield "\">
          <div class=\"clearfix main-content__container\">
            <div class=\"row\">
              <section class=\"";
        // line 398
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_grid_class"] ?? null), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_content_paddings"] ?? null), "html", null, true);
        yield "\">
                ";
        // line 400
        yield "                <div class=\"clearfix main-content__section";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        yield "\"
                  ";
        // line 401
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 402
            yield "                    data-animate-effect=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_content_animation_effect"] ?? null), "html", null, true);
            yield "\"
                  ";
        }
        // line 403
        yield ">
                  ";
        // line 404
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 404)) {
            // line 405
            yield "                    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 405), "html", null, true);
            yield "
                  ";
        }
        // line 407
        yield "                </div>
                ";
        // line 409
        yield "              </section>
              ";
        // line 410
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 410)) {
            // line 411
            yield "                <aside class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first_grid_class"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_paddings"] ?? null), "html", null, true);
            yield "\">
                  ";
            // line 413
            yield "                  <section class=\"sidebar__section sidebar-first clearfix";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\"
                    ";
            // line 414
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 415
                yield "                      data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first_animation_effect"] ?? null), "html", null, true);
                yield "\"
                    ";
            }
            // line 416
            yield ">
                    ";
            // line 417
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 417), "html", null, true);
            yield "
                  </section>
                  ";
            // line 420
            yield "                </aside>
              ";
        }
        // line 422
        yield "              ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 422)) {
            // line 423
            yield "                <aside class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second_grid_class"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_paddings"] ?? null), "html", null, true);
            yield "\">
                  ";
            // line 425
            yield "                  <section class=\"sidebar__section sidebar-second clearfix";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            yield "\"
                    ";
            // line 426
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 427
                yield "                      data-animate-effect=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second_animation_effect"] ?? null), "html", null, true);
                yield "\"
                    ";
            }
            // line 428
            yield ">
                    ";
            // line 429
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 429), "html", null, true);
            yield "
                  </section>
                  ";
            // line 432
            yield "                </aside>
              ";
        }
        // line 434
        yield "            </div>
          </div>
        </div>
      </div>
    ";
        yield from [];
    }

    // line 718
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_to_top(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 719
        yield "    ";
        if (($context["scroll_to_top_display"] ?? null)) {
            // line 720
            yield "    ";
            // line 721
            yield "      <div class=\"to-top\"><i class=\"fas ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["scroll_to_top_icon"] ?? null), "html", null, true);
            yield "\"></i></div>
    ";
            // line 723
            yield "    ";
        }
        // line 724
        yield "  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/basecore/templates/page.html.twig";
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
        return array (  2271 => 724,  2268 => 723,  2263 => 721,  2261 => 720,  2258 => 719,  2251 => 718,  2242 => 434,  2238 => 432,  2233 => 429,  2230 => 428,  2224 => 427,  2222 => 426,  2215 => 425,  2208 => 423,  2205 => 422,  2201 => 420,  2196 => 417,  2193 => 416,  2187 => 415,  2185 => 414,  2178 => 413,  2171 => 411,  2169 => 410,  2166 => 409,  2163 => 407,  2157 => 405,  2155 => 404,  2152 => 403,  2146 => 402,  2144 => 401,  2137 => 400,  2131 => 398,  2125 => 395,  2112 => 394,  2105 => 393,  2100 => 283,  2096 => 281,  2092 => 278,  2084 => 272,  2078 => 268,  2072 => 267,  2070 => 266,  2065 => 265,  2061 => 263,  2047 => 262,  2043 => 260,  2040 => 259,  2037 => 258,  2030 => 257,  2025 => 235,  2018 => 234,  2013 => 189,  2006 => 188,  2001 => 332,  1996 => 329,  1993 => 328,  1989 => 325,  1985 => 322,  1981 => 320,  1976 => 317,  1973 => 316,  1968 => 314,  1965 => 313,  1961 => 311,  1956 => 308,  1953 => 307,  1948 => 305,  1945 => 304,  1941 => 302,  1936 => 299,  1933 => 298,  1928 => 296,  1926 => 295,  1922 => 293,  1916 => 292,  1914 => 291,  1909 => 290,  1905 => 288,  1891 => 287,  1889 => 286,  1887 => 285,  1884 => 284,  1882 => 257,  1879 => 256,  1876 => 255,  1872 => 252,  1864 => 246,  1858 => 242,  1854 => 240,  1841 => 239,  1839 => 238,  1837 => 237,  1834 => 236,  1832 => 234,  1829 => 233,  1826 => 232,  1822 => 229,  1819 => 228,  1815 => 225,  1811 => 222,  1807 => 220,  1802 => 217,  1799 => 216,  1794 => 214,  1791 => 213,  1787 => 211,  1782 => 208,  1777 => 207,  1772 => 205,  1769 => 204,  1765 => 202,  1760 => 199,  1757 => 198,  1752 => 196,  1750 => 195,  1746 => 193,  1740 => 191,  1729 => 190,  1726 => 188,  1724 => 187,  1722 => 186,  1719 => 185,  1716 => 184,  1712 => 181,  1708 => 178,  1704 => 176,  1699 => 173,  1696 => 172,  1691 => 170,  1688 => 169,  1684 => 167,  1679 => 164,  1676 => 163,  1671 => 161,  1669 => 160,  1665 => 158,  1659 => 157,  1657 => 156,  1652 => 155,  1646 => 153,  1639 => 152,  1637 => 151,  1635 => 150,  1632 => 149,  1629 => 148,  1625 => 145,  1621 => 142,  1617 => 140,  1612 => 137,  1609 => 136,  1604 => 134,  1601 => 133,  1597 => 131,  1592 => 128,  1589 => 127,  1584 => 125,  1582 => 124,  1578 => 122,  1572 => 121,  1570 => 120,  1565 => 119,  1559 => 117,  1552 => 116,  1550 => 115,  1548 => 114,  1544 => 112,  1542 => 111,  1540 => 110,  1537 => 109,  1534 => 108,  1527 => 107,  1521 => 637,  1518 => 636,  1514 => 633,  1506 => 627,  1500 => 623,  1494 => 622,  1492 => 621,  1487 => 620,  1483 => 618,  1468 => 617,  1466 => 616,  1464 => 615,  1461 => 614,  1458 => 613,  1454 => 610,  1446 => 604,  1440 => 600,  1434 => 599,  1432 => 598,  1427 => 597,  1423 => 595,  1408 => 594,  1406 => 593,  1404 => 592,  1401 => 591,  1398 => 590,  1394 => 587,  1386 => 581,  1380 => 577,  1374 => 576,  1372 => 575,  1367 => 574,  1363 => 572,  1348 => 571,  1346 => 570,  1344 => 569,  1341 => 568,  1338 => 567,  1334 => 564,  1326 => 558,  1320 => 554,  1314 => 553,  1312 => 552,  1307 => 551,  1303 => 549,  1288 => 548,  1286 => 547,  1284 => 546,  1281 => 545,  1278 => 544,  1274 => 541,  1266 => 535,  1260 => 531,  1254 => 530,  1252 => 529,  1247 => 528,  1243 => 526,  1228 => 525,  1226 => 524,  1224 => 523,  1221 => 522,  1218 => 521,  1214 => 518,  1206 => 512,  1200 => 508,  1194 => 507,  1192 => 506,  1187 => 505,  1183 => 503,  1168 => 502,  1166 => 501,  1164 => 500,  1161 => 499,  1158 => 498,  1154 => 495,  1146 => 489,  1140 => 485,  1134 => 484,  1132 => 483,  1127 => 482,  1123 => 480,  1108 => 479,  1106 => 478,  1104 => 477,  1101 => 476,  1098 => 475,  1094 => 472,  1090 => 469,  1086 => 467,  1081 => 464,  1078 => 463,  1073 => 461,  1070 => 460,  1066 => 458,  1061 => 455,  1058 => 454,  1053 => 452,  1051 => 451,  1047 => 449,  1041 => 448,  1039 => 447,  1034 => 446,  1030 => 444,  1015 => 443,  1013 => 442,  1011 => 441,  1008 => 440,  1006 => 439,  1003 => 393,  1000 => 391,  997 => 390,  993 => 387,  985 => 381,  979 => 377,  973 => 376,  971 => 375,  966 => 374,  962 => 372,  947 => 371,  945 => 370,  943 => 369,  940 => 368,  937 => 367,  933 => 364,  925 => 358,  919 => 354,  913 => 353,  911 => 352,  906 => 351,  902 => 349,  889 => 348,  887 => 347,  885 => 346,  882 => 345,  873 => 339,  867 => 335,  865 => 334,  862 => 333,  860 => 107,  857 => 106,  850 => 105,  842 => 958,  840 => 957,  831 => 951,  825 => 948,  819 => 945,  810 => 939,  805 => 938,  798 => 933,  793 => 932,  785 => 927,  780 => 924,  778 => 923,  774 => 921,  772 => 920,  770 => 919,  767 => 918,  762 => 915,  759 => 914,  755 => 911,  751 => 908,  747 => 906,  742 => 903,  739 => 902,  734 => 900,  731 => 899,  727 => 897,  722 => 894,  719 => 893,  714 => 891,  712 => 890,  708 => 888,  704 => 886,  688 => 885,  686 => 884,  684 => 883,  681 => 882,  678 => 881,  674 => 878,  670 => 875,  663 => 871,  657 => 869,  654 => 868,  647 => 864,  641 => 862,  638 => 861,  631 => 857,  625 => 855,  623 => 854,  619 => 852,  615 => 850,  599 => 849,  597 => 848,  595 => 847,  592 => 846,  589 => 845,  585 => 842,  581 => 839,  574 => 835,  568 => 833,  565 => 832,  558 => 828,  552 => 826,  549 => 825,  542 => 821,  536 => 819,  533 => 818,  526 => 814,  520 => 812,  518 => 811,  514 => 809,  510 => 807,  494 => 806,  492 => 805,  490 => 804,  487 => 803,  484 => 802,  478 => 797,  474 => 795,  469 => 792,  466 => 791,  460 => 790,  458 => 789,  453 => 788,  448 => 786,  445 => 785,  441 => 783,  436 => 780,  433 => 779,  427 => 778,  425 => 777,  420 => 776,  415 => 774,  413 => 773,  406 => 772,  402 => 770,  397 => 767,  394 => 766,  388 => 765,  386 => 764,  381 => 763,  376 => 761,  374 => 760,  369 => 759,  365 => 757,  360 => 754,  357 => 753,  351 => 752,  349 => 751,  344 => 750,  339 => 748,  336 => 747,  332 => 745,  327 => 742,  324 => 741,  318 => 740,  316 => 739,  311 => 738,  306 => 736,  304 => 735,  298 => 732,  282 => 731,  280 => 730,  278 => 729,  274 => 727,  272 => 726,  269 => 725,  267 => 718,  264 => 717,  261 => 716,  257 => 713,  253 => 710,  249 => 708,  244 => 705,  241 => 704,  236 => 702,  233 => 701,  229 => 699,  224 => 696,  221 => 695,  216 => 693,  214 => 692,  210 => 690,  204 => 689,  202 => 688,  197 => 687,  193 => 685,  176 => 684,  174 => 683,  172 => 682,  169 => 681,  165 => 679,  160 => 675,  154 => 670,  149 => 667,  146 => 666,  140 => 661,  136 => 659,  129 => 658,  118 => 650,  114 => 649,  107 => 645,  104 => 644,  99 => 642,  97 => 641,  94 => 640,  92 => 639,  89 => 105,  85 => 102,  82 => 100,  78 => 97,  75 => 95,  72 => 93,  66 => 89,  62 => 87,  55 => 85,  53 => 84,  51 => 83,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/basecore/templates/page.html.twig", "/var/www/html/web/themes/contrib/basecore/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 83, "block" => 105, "trans" => 933];
        static $filters = ["escape" => 85];
        static $functions = ["attach_library" => 642, "url" => 938];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'trans'],
                ['escape'],
                ['attach_library', 'url'],
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
