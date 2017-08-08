<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_aadab33f8577748a1309fb79392801e14741096ed6467662c7df421757830aa6 extends Twig_Template
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
        $__internal_75075490f039b25a6d746141dc406f110a551ca670172304f6c876cc74c12bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75075490f039b25a6d746141dc406f110a551ca670172304f6c876cc74c12bcd->enter($__internal_75075490f039b25a6d746141dc406f110a551ca670172304f6c876cc74c12bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_75075490f039b25a6d746141dc406f110a551ca670172304f6c876cc74c12bcd->leave($__internal_75075490f039b25a6d746141dc406f110a551ca670172304f6c876cc74c12bcd_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_60932c5e9c197290663667d5fa8fa8794d92756f94fa0a53a7fced3fa0c8f27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60932c5e9c197290663667d5fa8fa8794d92756f94fa0a53a7fced3fa0c8f27f->enter($__internal_60932c5e9c197290663667d5fa8fa8794d92756f94fa0a53a7fced3fa0c8f27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2>ページが表示できませんでした。</h2>
    <div id=\"wrapper\">
        <div id=\"contentsbody\">
            <div style=\"text-align: left\">
                <p>システムエラーが発生した可能性があります。</p>
                <p>URLをもう一度ご確認いただくか、TOPページより目的のページをお探しください。</p>
                <p>サイトが開かない場合は、誠に申し訳ありませんがしばらくたってから、再度お試しください。</p>
            </div>
        </div><!-- end contentsbody -->
    </div><!-- end wrapper -->
";
        
        $__internal_60932c5e9c197290663667d5fa8fa8794d92756f94fa0a53a7fced3fa0c8f27f->leave($__internal_60932c5e9c197290663667d5fa8fa8794d92756f94fa0a53a7fced3fa0c8f27f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block body %}
    <h2>ページが表示できませんでした。</h2>
    <div id=\"wrapper\">
        <div id=\"contentsbody\">
            <div style=\"text-align: left\">
                <p>システムエラーが発生した可能性があります。</p>
                <p>URLをもう一度ご確認いただくか、TOPページより目的のページをお探しください。</p>
                <p>サイトが開かない場合は、誠に申し訳ありませんがしばらくたってから、再度お試しください。</p>
            </div>
        </div><!-- end contentsbody -->
    </div><!-- end wrapper -->
{% endblock %}", "TwigBundle:Exception:error.html.twig", "/var/www/zoto/waikiki/app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
