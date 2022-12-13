
### About project
symfony project for education purpose
### Development Setup
http://localhost:8080/

**run:** docker-compose up --force-recreate --build
**run:** php bin/console list make

**Commit prefix:**

1. One of the following:

    1. ```feat - changed or newly developed feature```
    2. ```fix - bug fix```
    3. ```chore - update documentation, update dependencies, update framework, etc.```
    4. ```refactor - refactored code```
    5. ```style - only styling changes```

#### e-commerce-app endpoint
| Path             | Method | Description               |
|------------------|--------|---------------------------|
| /                | GET    | return default message    |
| /api/login_check | POST   | password should be hashed |