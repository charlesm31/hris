<template>
<div>
    <div class="jumbotron">
      <div class="container">
        <h1>Simple <strong>Vue component</strong> </h1>
        <p>for displaying the welcome page made with the following:</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Vue JS 2</h2>
          <p>Vue (pronounced /vjuː/, like view) is a progressive framework for building user interfaces. Unlike other monolithic frameworks, Vue is designed from the ground up to be incrementally adoptable.</p>
          <p><a class="btn btn-default" href="https://vuejs.org/" target="_blank">View details »</a></p>
        </div>
        <div class="col-md-4">
          <h2>Laravel 5.5</h2>
          <p>is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern.</p>
          <p><a class="btn btn-default" href="https://laravel.com" target="_blank">View details »</a></p>
       </div>
        <div class="col-md-4">
          <h2>PHP 7</h2>
          <p>PHP is a server-side scripting language designed primarily for web development but also used as a general-purpose programming language. PHP STANDS FOR: PHP: Hypertext Preprocessor.</p>
          <p><a class="btn btn-default" href="http://php.net/manual/en/intro-whatis.php" target="_blank">View details »</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>© 2016 Charlesm31, Inc.</p>
      </footer>
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Homepage mounted.')
        }
    }
</script>
