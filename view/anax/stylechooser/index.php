<?php

namespace Anax\View;

/**
 * Style chooser.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());



?><h1>Styleväljare</h1>
<p>Här kan du välja bland de olika teman som skapats i kursen</p>
<form class="stylechooser" method="post" action="<?= url("style/update") ?>">
    <fieldset>
        <legend>Styleväljare</legend>
        <p>
            <label for="stylechooser">Välj ett tema för att aktivera:<br>
                <select name="stylechooser" onchange="form.submit();">
                    <option value="none">Ingen stil används, välj en i listan</option>
                    <?php foreach ($styles as $key => $value) :
                        $selected = $key === $activeStyle ? "selected=\"selected\"" : null;
                        ?>
                        <option <?= $selected ?> value="<?= $key ?>"><?= "[ $key ] - {$value["shortDescription"]}" ?></option>
                    <?php endforeach; ?>
                </select>
            </label>
        </p>
        <?php if ($activeStyle) : ?>
            <p>Här är detaljer om din valda stil</p>
            <table>
                <tr>
                    <th>Tema:</th>
                    <td><code><?= $activeStyle ?></code></td>
                </tr>
                <tr>
                    <th>Kort beskrivning:</th>
                    <td><?= $activeShortDescription ?></td>
                </tr>
                <tr>
                    <th>Beskrivning:</th>
                    <td><?= $activeLongDescription ?></td>
                </tr>
            </table>
        <?php endif; ?>
    </fieldset>
</form>
