# Symfony2

Next:
1) Install some missing packages:
   composer require symfonycasts/verify-email-bundle symfony/mailer
2) In RegistrationController::verifyUserEmail():
    * Customize the last redirectToRoute() after a successful email verification.
    * Make sure you're rendering success flash messages or change the $this->addFlash() line.
3) Review and customize the form, controller, and templates as needed.
4) Run "php bin/console make:migration" to generate a migration for the newly added Users::isVerified property.

Then open your browser, go to "/register" and enjoy your new form!

symfony/mailer  instructions:

  * You're ready to send emails.

  * If you want to send emails via a supported email provider, install
    the corresponding bridge.
    For instance, composer require mailgun-mailer for Mailgun.

  * If you want to send emails asynchronously:

    1. Install the messenger component by running composer require messenger;
    2. Add 'Symfony\Component\Mailer\Messenger\SendEmailMessage': amqp to the
       config/packages/messenger.yaml file under framework.messenger.routing
       and replace amqp with your transport name of choice.

  * Read the documentation at https://symfony.com/doc/master/mailer.html
