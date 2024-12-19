# Logger Project

This project is a simple logging system designed with flexibility in mind, allowing logs to be written to multiple destinations (file, database, email) based on configuration. It utilizes Docker for environment setup and is designed to be easy to deploy and extend.

## Requirements

- **Docker** (latest version)
- **Docker Compose**

## Setting up the Project Locally

1. **Clone the Repository**

   Clone the project to your local machine:

   ```bash
   cd projects/
   git clone <repository-url> logger
   cd logger/

2. **Run Docker**
   Run the following command:
   ```bash
   docker-compose up -d

3. **Make Composer install the project's dependencies**

   ```bash
   cd my-project/
   docker-compose exec php composer install

These steps are enough to get the current App running locally.
