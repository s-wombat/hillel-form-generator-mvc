<?php use App\Library\FormGenerator\FormGenerator;?>

<h1>Contact</h1>
<?php if(!$status): ?>

<?php
    try {
        $label = FormGenerator::addItem(
            'label',
            [
                'for' => 'name'
            ],
            'Contact form',
        );
        $name = FormGenerator::addItem(
            'input',
            [
                'id' => 'name',
                'type' => 'text',
                'name' => 'name',
                'placeholder' => 'name'
            ]
        );
        $email = FormGenerator::addItem(
            'input',
            [
                'id' => 'email',
                'type' => 'email',
                'name' => 'email',
                'placeholder' => 'email'
            ]
        );
        $submit = FormGenerator::addItem(
            'input',
            [
                'type' => 'submit',
                'name' => 'submit',
                'value' => 'Save',
                'class' => 'mySubmit'
            ],
            'mySubmit',
        );

        $formItems = [$label, $name, $email, $submit];
        echo FormGenerator::generateForm('POST', '/contact-save', 'Contacts', 'form', $formItems);

    } catch (\Exception $exception) {
        echo $exception->getMessage();
    }
?>

<?php else: ?>
    <h2 class="success">Success save contacts</h2>
    <div class="result">
        <h3>Name: <?= $name ?></h3>
        <h3>Email: <?= $email ?></h3>
    </div>
<?php endif; ?>


