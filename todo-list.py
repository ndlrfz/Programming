"""
Todo application simple with Python and sqlite3
"""

# Todolist application
# Step 1: Create new list.
# Step 2: View all lists.
# Step 3: Display list.
# Step 4: Rename list.
# Step 5: Delete empty list.
# Step 6: Create task.
# Step 7: Mark task as complete.
# Step 8: Edit a task's content.
#

import argparse
import sqlite3

conn = sqlite3.connect('app.db')
curs = conn.cursor()


def init_db():
    '''
    Initialize and create database
    Then create table todo with fileds id, tasks, and status
    '''
    file = 'app.db'
    try:
        conndb = sqlite3.connect(file)
        print('Connected to the database', file)
        cursor = conndb.cursor()
        cursor.execute(
            """CREATE TABLE IF NOT EXISTS todo (
            id INTEGER PRIMARY KEY,
            task TEXT NOT NULL,
            status TEXT NOT NULL
            );"""
        )
        print('Table was created')
    except sqlite3.OperationalError as e:
        print('Cannot connect to the database', e)


def create_parser():
    '''
    argparse to create command line menu
    '''
    parser = argparse.ArgumentParser(description="Simple Todo-List app with Python and SQLite")
    parser.add_argument('-a', '--add', metavar='', help='Add new task')
    parser.add_argument('-s', '--status', type=int, choices=[1, 2, 3], help='1 IDEA 2 DOING 3 DONE')
    parser.add_argument('-l', '--lists', action='store_true', help='List all tasks')
    parser.add_argument('-d', '--delete', metavar='id', help='Delete task')
    parser.add_argument('-i', '--init', action='store_true', help='Initialize database')
    parser.add_argument('-c', '--change', metavar='id', help='Change status IDEA/DOING/DONE')
    return parser


def create_task(task, status):
    '''
    Fungsi untuk create task <- -> <= => != ==
    NULL adalah id PK (Primary Key) => -> !=
    '''
    params = (task, status)
    curs.execute('INSERT INTO todo VALUES (NULL, ?, ?)', params)
    conn.commit()


def show_task():
    '''
    Show all tasks
    '''
    data = curs.execute('SELECT * FROM todo')
    print('List Tasks:')
    tasks = data.fetchall()
    for task in tasks:
        print(task, sep=' ')


def delete_task(taskid):
    '''
    Delete task
    '''
    task_id = taskid
    curs.execute('DELETE FROM todo WHERE id = ?', task_id)
    conn.commit()


def change_status(taskid, status):
    '''
    Change task status IDEA DOING DONE
    '''
    params = (status, taskid)
    curs.execute('UPDATE todo SET status = ? WHERE id = ?', params)
    conn.commit()


def main():
    '''
    Create parser for menu
    '''
    parser = create_parser()
    args = parser.parse_args()
    idea = "IDEA"
    doing = "DOING"
    done = "DONE"

    if args.add and args.status == 1:
        create_task(args.add, idea)
    elif args.add and args.status == 2:
        create_task(args.add, doing)
    elif args.add and args.status == 3:
        create_task(args.add, done)
    elif args.init:
        init_db()
    elif args.lists:
        show_task()
    elif args.delete:
        delete_task(args.delete)
        print(f'Task {args.delete} deleted!')
    elif args.change and args.status == 1:
        change_status(args.change, idea)
        print(f'Task {args.change} has been changed to {idea}!')
    elif args.change and args.status == 2:
        change_status(args.change, doing)
        print(f'Task {args.change} has been changed to {doing}!')
    elif args.change and args.status == 3:
        change_status(args.change, done)
        print(f'Task {args.change} has been changed to {done}!')
    else:
        parser.print_help()


if __name__ == "__main__":
    main()
