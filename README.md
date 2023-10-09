<h1 align="center">Guide to Running the Yii Application</h1>

<p align="center">Here you will find steps to run the Yii application on your computer. Before running the application, make sure you meet all the environment requirements and configuration.</p>

<h2>Environment Requirements</h2>
<ul>
  <li>PHP (version 7.4 or newer)</li>
  <li>Composer (dependency management tool)</li>
  <li>Web server (e.g., Apache or Nginx)</li>
  <li>MySQL or another RDBMS for the database</li>
</ul>

<h2>Installation</h2>
<ol>
  <li>Clone this Git repository to your computer.</li>
  <pre><code>git clone https://github.com/your-account/repository-name.git</code></pre>
  
  <li>Navigate to the project directory.</li>
  <pre><code>cd repository-name</code></pre>
  
  <li>Install all the necessary dependencies using Composer.</li>
  <pre><code>composer install</code></pre>
</ol>

<h2>Database Configuration</h2>
<ol>
  <li>In the <code>config</code> directory, find the <code>db.php</code> file and open it for editing.</li>
  
  <li>Configure the database parameters (hostname, username, password, dbname) according to your settings.</li>
  <pre><code>php
  return [
      'class' => 'yii\db\Connection',
      'dsn' => 'mysql:host=localhost;dbname=database-name',
      'username' => 'username',
      'password' => 'password',
      'charset' => 'utf8',
  ];
  </code></pre>
  
  <li>Save the changes and close the file.</li>
</ol>

<h2>Database Migration</h2>
<ol>
  <li>Run the migration command to create the database tables.</li>
  <pre><code>yii migrate</code></pre>
</ol>

<h2>Running the Application</h2>
<ol>
  <li>Start the web server.</li>
  
  <li>Access the application with command.</li>
  <pre><code>php yii serve --port=8080</code></pre>
</ol>

<h2>Additional Configuration</h2>
<p>If necessary, you can add additional instructions for configuring the application or customize other application parameters according to your project's needs.</p>

<p>After completing all the steps, the application should be up and running on your local computer.</p>

<p><strong>Note:</strong> This is a basic guide for running a Yii application, and you can adapt it to suit the specific requirements of your project.</p>
