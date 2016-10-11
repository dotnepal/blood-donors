Blood Donors Web Application
--------------------------

[![Build Status](https://travis-ci.org/dotnepal/blood-donors.svg?branch=master)](https://travis-ci.org/dotnepal/blood-donors)
[![Code Climate](https://codeclimate.com/github/dotnepal/blood-donors/badges/gpa.svg)](https://codeclimate.com/github/dotnepal/blood-donors)
[![Test Coverage](https://codeclimate.com/github/dotnepal/blood-donors/badges/coverage.svg)](https://codeclimate.com/github/dotnepal/blood-donors/coverage)

Repository to manage the blood donors nepal web-application.

How to contribute?
-------------------
- Currently we need the backend and frontend developer
- Can help us to gather information on blood donors
- See the issues and pick any one that you are interested in

GIT-PRE-COMMIT-HOOK
-------------------
- Execute `composer install --dev`
- After above command is finished running, you will have  `php-cs-fixer` installed in `vendor/bin/` directory.

Now, Copy and paste the following code into `.git/hooks/pre-commit` file. Create it if it doesn't exist yet.

```
#!/bin/sh

# Run php-cs-fixer on changed files, ready to be commited
#
# In case php-cs-fixer runs against syntax broken php file it will skip the file, with notice, but without error
# In order to prevent commit, the script will check if the file has syntax errors(php -l), and output it if any

AGAINST=HEAD
EXIT_STATUS=0

echo "[GIT COMMIT HOOK] Run PHP-FIXER"

for FILE in `git diff-index --cached --name-only --diff-filter=AM ${AGAINST}`
do
    php -l ./${FILE} 1> /dev/null && vendor/bin/php-cs-fixer fix ./${FILE} -v --dry-run --config-file ./.php_cs 1> /dev/null
    test $? != 0 && EXIT_STATUS=1 && php -l ./${FILE} && vendor/bin/php-cs-fixer fix ./${FILE} -v --dry-run --config-file ./.php_cs
done

exit ${EXIT_STATUS}
```

After copy & paste, execute the following command from the project root directory.

`$ chmod +x .git/hooks/pre-commit`

Having this file ensure that our every commit is passed through php code sniffer and we are using the right standard (PSR2 etc.)

TODO
-----
- Create dashboard to add/remove/update donor information
- Add sign up page for blood donors
- Add blood donation events page

