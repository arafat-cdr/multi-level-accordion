<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Design</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Open Sans', sans-serif;
      font-weight: 300;
    }
    a {
      text-decoration: none;
      color: inherit;
    }
    p {
      font-size: 1.1em;
      margin: 1em 0;
    }


    ul {
      list-style: none;
      padding: 0;
    }
    ul .inner {
      padding-left: 1em;
      overflow: hidden;
      display: none;
    }
    ul .inner.show {
      /*display: block;*/
    }
    ul li {
      margin: 0.5em 0;
    }
    ul li a.toggle {
      width: 100%;
      display: block;
      background: rgba(0, 0, 0, 0.78);
      color: #fefefe;
      padding: 0.75em;
      border-radius: 0.15em;
      transition: background 0.3s ease;
    }
    ul li a.toggle:hover {
      background: rgba(0, 0, 0, 0.9);
    }
  </style>
</head>
<body>

<div class="row" style="margin-top:50px;">


      <ul class="accordion col-md-offset-4 col-md-4">
        <?php for($main = 1; $main < 9; $main++) { ?>
        <li>
          <a class="toggle" href="javascript:void(0);">This Is the Parent</a>
          <ul class="inner">
            <?php for($i = 1; $i < 6; $i++) { ?>
              <li>
                <a href="#" class="toggle"> 2019 Volume 1</a>
                <div class="inner">
                  <p>
                    Issue 01
                  </p>
                  <p>
                    Issue 02
                  </p>
                  <p>
                    Issue 03
                  </p>
                  <p>
                    Issue 04
                  </p>
                  <p>
                    Issue 05
                  </p>
                  <p>
                    Issue 06
                  </p>
                </div>
              </li>

            <?php  } ?>
          </ul>
        </li>
        <?php  } ?>

      </ul>


</div>

<!--========================================-->
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script>
  $(document).ready(function (){
    $('.toggle').click(function(e) {
        e.preventDefault();

        var $this = $(this);

        if ($this.next().hasClass('show')) {
            $this.next().removeClass('show');
            $this.next().slideUp(1);
        } else {
            $this.parent().parent().find('li .inner').removeClass('show');
            $this.parent().parent().find('li .inner').slideUp(1);
            $this.next().toggleClass('show');
            $this.next().slideToggle(1);
        }
    });
  });
</script>
<!--========================================-->
</body>
</html>
