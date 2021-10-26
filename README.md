## Test Your Laravel Blade Skills

This repository is a test for you: perform a set of tasks listed below, and fix the PHPUnit tests, which are currently intentionally failing.

To test if all the functions work correctly, there are PHPUnit tests in `tests/Feature/ViewsTest.php` file.

In the very beginning, if you run `php artisan test`, or `vendor/bin/phpunit`, all 8 tests fail.
Your task is to make those tests pass.


## How to Submit Your Solution

If you want to submit your solution, you should make a Pull Request to the `main` branch.
It will automatically run the tests via Github Actions and will show you/me if the test pass.

If you don't know how to make a Pull Request, [here's my video with instructions](https://www.youtube.com/watch?v=vEcT6JIFji0).

This task is mostly self-served, so I'm not planning review or merge the Pull Requests. This test is for yourselves to assess your skills, the automated tests will be your answer if you passed the test :)


## Questions / Problems?

If you're struggling with some of the tasks, or you have suggestions how to improve the task, create a Github Issue.

Good luck!

---

## Task 1. Passing Data to Views.

File `app/Http/Controllers/HomeController.php`, method `users()`, pass the `$usersCount` to the View.

Test method `test_users_list_get_with_values()`.

---

## Task 2. Prevent the XSS Attack.

The page `/alert` will show you a JavaScript alert. You need to change something in `resources/views/alert.blade.php` file, so that this alert would not be thrown, and instead just its HTML would be shown.

Test method `test_script_alert_does_not_fire_modal`.

---

## Task 3. Loop in the Table.

The file `resources/views/table.blade.php` should show the loop of all users, or "No content" row, if no users are in the database.

Test method `test_loop_shows_table_or_empty()`.

---

## Task 4. Styling Table Rows.

Three sub-tasks related to the table and loop, all in file `resources/views/rows.blade.php`:

- in the first column, add the row number: 1, 2, etc.
- only every second row (2nd, 4th, etc) should have CSS class "bg-red-100"
- only the FIRST row should have email column with "font-bold"

Test method `test_rows_styled_with_number()`.

---

## Task 5. Logged-in User.

In the file `resources/views/authenticated.blade.php`, show the appropriate text, if the user is/isn't logged in.

If the user is logged in, show their email.

Test method `test_authenticated()`.

---

## Task 6. Include File.

In the file `resources/views/include.blade.php`, include another Blade file `resources/views/includes/row.blade.php`, passing the parameter correctly.

Test method `test_include_row()`.

---

## Task 7. Global Variable.

In the file `resources/views/layouts/app.blade.php`, there's a "global" variable `$metaTitle`. Pass its value to this view, for all pages, without touching any Controllers.

Test method `test_meta_title()`.

---

## Task 8. Layouts.

Change the file `resources/views/layout.blade` to extend the `layouts/main.blade.php` (without Blade components) instead of `layouts/app.blade.php` (with Blade components).

Test method `test_layout()`.
