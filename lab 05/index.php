<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            max-width: 1190px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <?php
            class Page
            {
                private string $title;
                private int $year;
                private string $content = "";
                private string $copyright;

                function __construct($page, $title, $year, $copyright)
                {
                    $this->page = $page;
                    $this->title = $title;
                    $this->year = $year;
                    $this->copyright = $copyright;
                }

                function Header()
                {
                    $this->content = "<h1>$this->title</h1><br>";
                }

                function Content(string $content)
                {
                    $this->content = $this->content . "<p>$content</p><br>";
                }

                function Footer()
                {
                    $this->content = $this->content . "<hr><p>Copyright: $this->copyright | year: $this->year</p><br>";
                }

                function get()
                {
                    if ($this->content == "") {
                        return "Page is empty";
                    } else  return $this->content;
                }
            }
            $page1 = new Page("Page1", "title of page 1", 2021, "Author1");
            $page1->Header();
            $page1->Footer();
            $page2 = new Page("Page2", "title of page 2", 2011, "Author2");
            $page2->Header();
            $page2->Content("Hello world 1");
            $page2->Footer();
            $page3 = new Page("Page3", "title of page 3", 2019, "Author3");
            $page3->Header();
            $page3->Content("Hello world 1");
            $page3->Footer();
            $page4 = new Page("Page4", "title of page 4", 2021, "Author4");
            $page4->Header();
            $page4->Content("Hello world 1");
            $page4->Footer();
            $page5 = new Page("Page5", "title of page 5", 2012, "Author5");
            $page5->Header();
            $page5->Content("Hello world 1");
            $page5->Footer();

            ?>
            <form method="GET">
                <?php
                if (isset($_GET['page'])) {
                    if ($_GET['page'] == "page1") {
                        print '<input type="radio" id="page1" name="page" value="page1" checked="checked"><label for="page1">Page1</label><br>';
                    } else print '<input type="radio" id="page1" name="page" value="page1"><label for="page1">Page1</label><br>';
                    if ($_GET['page'] == "page2") {
                        print '<input type="radio" id="page2" name="page" value="page2" checked="checked"><label for="page2">Page2</label><br>';
                    } else print '<input type="radio" id="page2" name="page" value="page2"><label for="page2">Page2</label><br>';
                    if ($_GET['page'] == "page3") {
                        print '<input type="radio" id="page3" name="page" value="page3" checked="checked"><label for="page3">Page3</label><br>';
                    } else print '<input type="radio" id="page3" name="page" value="page3"><label for="page3">Page3</label><br>';
                    if ($_GET['page'] == "page4") {
                        print '<input type="radio" id="page4" name="page" value="page4" checked="checked"><label for="page4">Page4</label><br>';
                    } else print '<input type="radio" id="page4" name="page" value="page4"><label for="page4">Page4</label><br>';
                    if ($_GET['page'] == "page5") {
                        print '<input type="radio" id="page5" name="page" value="page5" checked="checked"><label for="page5">Page5</label><br>';
                    } else print '<input type="radio" id="page5" name="page" value="page5"><label for="page5">Page5</label><br>';
                } else print '<input type="radio" id="page1" name="page" value="page1">
                    <label for="page1">Page1</label><br>
                    <input type="radio" id="page2" name="page" value="page2">
                    <label for="page2">Page2</label><br>
                    <input type="radio" id="page3" name="page" value="page3">
                    <label for="page3">Page3</label><br>
                    <input type="radio" id="page4" name="page" value="page4">
                    <label for="page14">Page4</label><br>
                    <input type="radio" id="page5" name="page" value="page5">
                    <label for="page5">Page5</label><br>'
                ?>
                <button type="submit">submit</button>
            </form>
            <?php
            if (isset($_GET['page'])) {
                switch ($_GET['page']) {
                    case 'page1':
                        echo $page1->get();
                        break;
                    case 'page2':
                        echo $page2->get();
                        break;
                    case 'page3':
                        echo $page3->get();
                        break;
                    case 'page4':
                        echo $page4->get();
                        break;
                    case 'page5':
                        echo $page5->get();
                        break;
                    default:
                        break;
                }
            } else echo "Select page";
            ?>
        </div>
    </div>
</body>

</html>