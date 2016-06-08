NO_COLOR=\x1b[0m
OK_COLOR=\x1b[32;01m
ERROR_COLOR=\x1b[31;01m
WARN_COLOR=\x1b[33;01m

PHPUNIT=vendor/bin/phpunit
PHP_CS_FIXER=vendor/bin/php-cs-fixer

all: tests testdox cov

test:
	$(PHPUNIT) -c phpunit.xml.dist tests

testdox:
	@$(PHPUNIT) -c phpunit.xml.dist --testdox tests \
	 | sed 's/\[x\]/$(OK_COLOR)$\[x]$(NO_COLOR)/' \
	 | sed -r 's/(\[ \].+)/$(ERROR_COLOR)\1$(NO_COLOR)/' \
	 | sed -r 's/(^[^ ].+)/$(WARN_COLOR)\1$(NO_COLOR)/'

testdox-osx:
	@$(PHPUNIT) -c phpunit.xml.dist --testdox tests \
	 | sed 's/\[x\]/$(OK_COLOR)$\[x]$(NO_COLOR)/' \
	 | sed -E 's/(\[ \].+)/$(ERROR_COLOR)\1$(NO_COLOR)/' \
	 | sed -E 's/(^[^ ].+)/$(WARN_COLOR)\1$(NO_COLOR)/'

cov:
	@$(PHPUNIT) -c phpunit.xml.dist --coverage-text

style:
	@php -n $(PHP_CS_FIXER) fix --verbose src
	@php -n $(PHP_CS_FIXER) fix --verbose tests

c: cov

t: test

d: testdox
