<?php

/* top/head.html.twig */
class __TwigTemplate_8c96f892387b830ad8df9ea7de1c1e60c487925f8bfcf0e83f0a0e7f1e4c8778 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9dfc8d691339613c455d1f211c62a13b0c645f94746e1abeae2f6aba014638d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9dfc8d691339613c455d1f211c62a13b0c645f94746e1abeae2f6aba014638d->enter($__internal_c9dfc8d691339613c455d1f211c62a13b0c645f94746e1abeae2f6aba014638d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "top/head.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
    <html>
    <head>
        <meta charset=\"UTF-8\">
        <title>滝沢菜食志向</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/index.css"), "html", null, true);
        echo "\">

        <script src=\"https://code.jquery.com/jquery-1.12.4.min.js\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/jquery.smoothscroll-master/js/jquery.smoothscroll.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            function slideSwitch() {
                var \$active = \$('#slideshow img.active');

                if ( \$active.length == 0 ) \$active = \$('#slideshow img:last');

                var \$next =  \$active.next().length ? \$active.next()
                        : \$('#slideshow img:first');

                \$active.addClass('last-active');

                \$next.css({opacity: 0.0})
                        .addClass('active')
                        .animate({opacity: 1.0}, 1000, function() {
                            \$active.removeClass('active last-active');
                        });
            }

            \$(function() {
                setInterval( \"slideSwitch()\", 2000 );
            });
        </script>
    </head>


    <body>
    ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "    </body>

</html>
";
        
        $__internal_c9dfc8d691339613c455d1f211c62a13b0c645f94746e1abeae2f6aba014638d->leave($__internal_c9dfc8d691339613c455d1f211c62a13b0c645f94746e1abeae2f6aba014638d_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d6a56e701658b2b620d487eb37dc570fe9defb569a0fb6a0cd25e161911adab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6a56e701658b2b620d487eb37dc570fe9defb569a0fb6a0cd25e161911adab->enter($__internal_9d6a56e701658b2b620d487eb37dc570fe9defb569a0fb6a0cd25e161911adab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9d6a56e701658b2b620d487eb37dc570fe9defb569a0fb6a0cd25e161911adab->leave($__internal_9d6a56e701658b2b620d487eb37dc570fe9defb569a0fb6a0cd25e161911adab_prof);

    }

    public function getTemplateName()
    {
        return "top/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 37,  69 => 38,  67 => 37,  37 => 10,  30 => 6,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
    <html>
    <head>
        <meta charset=\"UTF-8\">
        <title>滝沢菜食志向</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/framework/css/index.css')  }}\">

        <script src=\"https://code.jquery.com/jquery-1.12.4.min.js\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"{{  asset('bundles/framework/jquery.smoothscroll-master/js/jquery.smoothscroll.js')}}\"></script>
        <script type=\"text/javascript\">
            function slideSwitch() {
                var \$active = \$('#slideshow img.active');

                if ( \$active.length == 0 ) \$active = \$('#slideshow img:last');

                var \$next =  \$active.next().length ? \$active.next()
                        : \$('#slideshow img:first');

                \$active.addClass('last-active');

                \$next.css({opacity: 0.0})
                        .addClass('active')
                        .animate({opacity: 1.0}, 1000, function() {
                            \$active.removeClass('active last-active');
                        });
            }

            \$(function() {
                setInterval( \"slideSwitch()\", 2000 );
            });
        </script>
    </head>


    <body>
    {% block body %}{% endblock %}
    </body>

</html>
", "top/head.html.twig", "/var/www/zoto/waikiki/app/Resources/views/top/head.html.twig");
    }
}
