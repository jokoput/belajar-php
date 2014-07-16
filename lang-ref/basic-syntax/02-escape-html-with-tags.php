1.  <?php echo 'if you want to serve XHTML or XML documents, do it like this'; ?>

2.  <script language="php">
        echo 'some editors (like FrontPage) don\'t
              like processing instructions';
    </script>

3.  <? echo 'this is the simplest, an SGML processing instruction'; ?>
    <?= expression ?> This is a shortcut for "<? echo expression ?>"

4.  <% echo 'You may optionally use ASP-style tags'; %>
    <%= $variable; %> This is a shortcut for "<% echo $variable; %>"