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

/* index.twig */
class __TwigTemplate_1349ea7eb0f334bd3ce6d5c114ec7f06 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Vero-Digital</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">

</head>
<body>
<div class=\"container mt-5\">
    <input type=\"text\" id=\"search\" oninput=\"search()\" placeholder=\"Search tasks...\" class=\"form-control mb-3\">

    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#imageModal\">
        Select Image
    </button>

    <table class=\"table table-bordered\" id=\"tasksTable\">
        <thead>
        <tr>
            <th>Task</th>
            <th>Title</th>
            <th>Description</th>
            <th>Color</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>



    <!-- Modal -->
    <div class=\"modal fade\" id=\"imageModal\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Image Selector</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                </div>
                <div class=\"modal-body\">
                    <input type=\"file\" id=\"imageInput\" accept=\"image/*\" onchange=\"previewImage()\">
                    <img id=\"selectedImage\" style=\"max-width: 100%; margin-top: 10px;\">
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js\"></script>

<script>
    \$(document).ready(function() {
        fetchTasks();

        setInterval(fetchTasks, 60 * 60 * 1000);
    });
    function fetchTasks() {
        let url = \$(location).attr(\"href\");
        \$.ajax({
            url: url + 'api/data',
            method: 'GET',
            success: function(response) {
                let rows = '';
                response.forEach(task => {
                    rows += `<tr>
                      <td>\${task.task}</td>
                      <td>\${task.title}</td>
                      <td>\${task.description}</td>
                      <td style=\"background-color: \${task.colorCode};\">\${task.colorCode}</td>
                    </tr>`;
                });
                \$('#tasksTable tbody').html(rows);
            }
        });
    }
    function search() {
        let value = \$('#search').val().toLowerCase();
        \$('#tasksTable tbody tr').filter(function() {
            \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1);
        });
    }
    function previewImage() {
        const file = document.getElementById('imageInput').files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            document.getElementById('selectedImage').src = e.target.result;
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "index.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Vero-Digital</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">

</head>
<body>
<div class=\"container mt-5\">
    <input type=\"text\" id=\"search\" oninput=\"search()\" placeholder=\"Search tasks...\" class=\"form-control mb-3\">

    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#imageModal\">
        Select Image
    </button>

    <table class=\"table table-bordered\" id=\"tasksTable\">
        <thead>
        <tr>
            <th>Task</th>
            <th>Title</th>
            <th>Description</th>
            <th>Color</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>



    <!-- Modal -->
    <div class=\"modal fade\" id=\"imageModal\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Image Selector</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                </div>
                <div class=\"modal-body\">
                    <input type=\"file\" id=\"imageInput\" accept=\"image/*\" onchange=\"previewImage()\">
                    <img id=\"selectedImage\" style=\"max-width: 100%; margin-top: 10px;\">
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js\"></script>

<script>
    \$(document).ready(function() {
        fetchTasks();

        setInterval(fetchTasks, 60 * 60 * 1000);
    });
    function fetchTasks() {
        let url = \$(location).attr(\"href\");
        \$.ajax({
            url: url + 'api/data',
            method: 'GET',
            success: function(response) {
                let rows = '';
                response.forEach(task => {
                    rows += `<tr>
                      <td>\${task.task}</td>
                      <td>\${task.title}</td>
                      <td>\${task.description}</td>
                      <td style=\"background-color: \${task.colorCode};\">\${task.colorCode}</td>
                    </tr>`;
                });
                \$('#tasksTable tbody').html(rows);
            }
        });
    }
    function search() {
        let value = \$('#search').val().toLowerCase();
        \$('#tasksTable tbody tr').filter(function() {
            \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1);
        });
    }
    function previewImage() {
        const file = document.getElementById('imageInput').files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            document.getElementById('selectedImage').src = e.target.result;
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
</body>
</html>", "index.twig", "/Users/yunusemrebicek/PhpstormProjects/vero-case/application/views/index.twig");
    }
}
