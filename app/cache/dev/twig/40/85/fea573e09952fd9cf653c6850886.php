<?php

/* CursoHolaMundoBundle:Hola:index.html.twig */
class __TwigTemplate_4085fea573e09952fd9cf653c6850886 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 19
        $context['code'] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "        Título de la plantilla index del controlador con la variable: ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'variable'), "html");
        echo "
    ";
    }

    // line 10
    public function block_contenido($context, array $blocks = array())
    {
        // line 11
        echo "                <div>
                    <p>Bloque contenido de plantilla index del controlador.</p>
                    <p>Aquí escribo la variable: <b>";
        // line 13
        echo twig_escape_filter($this->env, $this->getContext($context, 'variable'), "html");
        echo "</b>
                </div>
            ";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        echo "    
            ";
        // line 10
        $this->displayBlock('contenido', $context, $blocks);
        // line 16
        echo "    ";
    }

    public function getTemplateName()
    {
        return "CursoHolaMundoBundle:Hola:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
