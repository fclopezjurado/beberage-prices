## 🚀 Environment Setup

### 🐳 Needed tools

1. [Install Docker](https://www.docker.com/get-started)
2. Clone this project: `git clone git@github.com:fclopezjurado/beverage-prices.git`

### 🔥 Application execution

1. Start up the container running `make up`. You can stop containers running `make down`
2. Install all the dependencies running `make dependencies`

### ✅ Tests execution

1. Execute PHPUnit tests: `make unit-test`

### 👌 Quality & security tools

1. Run `make code-quality` to run all quality tools to review code quality.
2. Run `make security-check` to check security vulnerabilities in all third party dependencies.

## 👩‍💻 Project explanation

Repository to solve this kata https://github.com/Codesai/practice_program/tree/master/katas_java/05-refactoring-awful-inheritance-use-with-beverage-prices-kata
This code computes the prices of the beverages served in our coffe house.

We'd like you to add an optional cinnamon supplement that costs 0.05€ to all our existing catalog of beverages.

Tips:
You might want to refactor the code a bit first.

IMPORTANT NOTE: refactor for kata was implemented in _refactor_ branch.


