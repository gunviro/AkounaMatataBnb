<?php
/**
 * Created by PhpStorm.
 * User: gmarten
 * Date: 27/08/15
 * Time: 21:40
 */
?>

<span class="dropdown border-bold">
      <a class="dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">
          English
          <span class="flag flag-us"></span>
          <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" style="min-width: 130px;">
          <li role="presentation">
              <a role="menuitem" tabindex="-1" href="/fr/<?php echo $_SESSION["page"] ?>">
                  Français
                  <span class="flag flag-fr"></span>
              </a>
          </li>
          <li role="presentation">
              <a role="menuitem" tabindex="-1" href="/nl/<?php echo $_SESSION["page"] ?>">
                  Nederlands
                  <span class="flag flag-nl"></span>
              </a>
          </li>
          <li role="presentation">
              <a role="menuitem" tabindex="-1" href="/de/<?php echo $_SESSION["page"] ?>">
                  Deutsch
                  <span class="flag flag-de"></span>
              </a>
          </li>
      </ul>
</span>