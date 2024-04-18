<h1>WordPress site</h1>
<h3>Description:</h3>
  <p>Home project. The goal was to replicate a WordPress site for local development, then add a company product page and a simple cart. </p>
<h3>Content:</h3>
  <p>1) wp-content folder contains everything for custom theme works well.</p>
  <p>2) dbdump.sql file for database import.</p>
  <p>3) docker-compose.yml file creates docker containers and mounts folder for site start and research.</p>
<h3>How to install and run project:</h3>
  <p>1) Install Wsl. Link https://learn.microsoft.com/en-us/windows/wsl/install. Try to use Ubuntu-20.04 distro. Wsl starts with command "wsl".</p>
  <p>2) Install Docker. Link https://docs.docker.com/engine/install/ubuntu.</p>
  <p>3) Install Git. Link https://git-scm.com/book/en/v2/Getting-Started-Installing-Git.</p>
  <p>4) Download repo. Go to linux user home directory, use command "cd". Use command "git clone <a style="text-decoration:none; pointer-events:none; href="#">https://github.com/Aleksandrthreefiveeightzero/test.git</a> projects/wordpress_site_local".</p>
  <p>5) Start Docker. use command "sudo dockerd".</p>
  <p>6) Start YML file. Open new linux terminal. Go to new directory projects/wordpress_site_local. Use command "sudo docker compose build", then use command "sudo docker compose up".</p>
  <p>7) Insert custom theme. Use command "sudo cp -RT wp-content wordpress/wp-content".</p>
  <p>8) Import database. Use command "sudo docker ps". Copy container_ID which name is MYSQL. Use command "sudo docker exec -i container_ID mariadb -uroot -proot_password wordpress < dbdump.sql".</p>
<h3>How to use project:</h3>
  <p>1) Go to site. Open web-browser and type "localhost/" in address bar. Added page is located at "localhost/alfa-plaza/".</p>
  <p>2) Access administrative tools. Wp-admin can be reached by this credentials (user: Admin-Test; pass: gtdkwl-02)</p>
  <p>3) Explore files. Open new directory projects/wordpress_site_local in IDE.</p>
