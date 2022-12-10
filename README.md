# cloning laravel project from github
<ul>
<li>Clone your project</li>
<li>Go to the folder application using <code>cd</code> command on your cmd or terminal</li>
<li>Run <code>composer install</code> on your cmd or terminal</li>
<li>Copy <code>.env.example</code> file to <code>.env</code> on the root folder. You can type <code>copy .env.example .env</code> if using command prompt Windows or <code>cp .env.example .env</code> if using terminal, Ubuntu</li>
<li>Open your <code>.env</code> file and change the database name (<code>DB_DATABASE</code>) to whatever you have, username (<code>DB_USERNAME</code>) and password (<code>DB_PASSWORD</code>) field correspond to your configuration.</li>
<li>Run <code>php artisan key:generate</code></li>
<li>Run <code>php artisan migrate</code></li>
<li>Run <code>php artisan serve</code></li>
<li>Go to http://localhost:8000/</li>
</ul>
