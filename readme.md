Blood Donors List In Nepal
--------------------------

This is a repository that contains the information about the blood donors in Nepal. This would probably help needy ones to get blood when they need. This project has a page [Donor's Page](https://bravegurkha.github.io/blood-donors/) where you can get information about blood donors. If there is any problem with the information being provided at the respective page then please email at srestaswrnm[at]gmail[dot]com or contact directly in phone: 9813004402. You may also create an issue for it.

How to contribute?
-------------------

Thank you for the contribution in advance. You can just simply edit a **donors.json** for adding names of donors. The data should be formatted as previous one and the number should be just incremented. You can contriute to javascript file and index.html or add more the better experience of needy ones.

Format:
```json
"<number>": {
    "name": "<name>",
    "blood_group" : "<blood group>",
    "contact" : "<contact number>",
    "address" : "<address>"
}
```

GIT-PRE-COMMIT-HOOK
-------------------
- `composer install` should have installed the php-cs-fixer `vendor/bin/`.

Copy and paste the following code into `.git/hooks/pre-commit` file. Create it if it doesn't exist yet.

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
----
- Create dashboard to add/remove/update donor information
- Add sign up page for blood donors
- Add blood donation events page

