# Case Bank

This project provides a simple PHP application to manage cases and users. The `sql` folder contains example SQL scripts for setting up the database.

## Database Setup

Use one of the provided SQL dumps to create the schema:

```sh
mysql -u <user> -p < database_name > < sql/case_v1.sql
```

or

```sh
mysql -u <user> -p < database_name > < "sql/case_ v2.sql"
```

Both versions now include a `state` column in the `users` table:

```sql
state TINYINT NOT NULL DEFAULT 1
```

For existing databases run the migration in `sql/migrations/add_state_column.sql` to add the column:

```sh
mysql -u <user> -p < database_name > < sql/migrations/add_state_column.sql
```
