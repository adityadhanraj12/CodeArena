<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'active' => 2,
        ]);

        $aditya = User::create([
            'name' => 'Aditya Dhanraj',
            'email' => 'aditya123@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('123456'),
            'active' => 2,
        ]);

        $admin = \App\Models\Admin::create([
            'name' => 'admin',
            'password' => 'admin',
        ]);

        // Define the 16 categories and their real questions pool (20 questions each)
        $categoriesData = [
            'Data Structures & Algorithms' => [
                'quiz_count' => 15,
                'q_count' => 20,
                'pool' => [
                    ['q' => 'Which data structure operates on a LIFO (Last In, First Out) basis?', 'a' => 'Queue', 'b' => 'Stack', 'c' => 'Linked List', 'd' => 'Array', 'ans' => 'b'],
                    ['q' => 'What is the worst-case time complexity of Quick Sort?', 'a' => 'O(n log n)', 'b' => 'O(n^2)', 'c' => 'O(n)', 'd' => 'O(1)', 'ans' => 'b'],
                    ['q' => 'Which traversal visits the root node last?', 'a' => 'Pre-order', 'b' => 'In-order', 'c' => 'Post-order', 'd' => 'Level-order', 'ans' => 'c'],
                    ['q' => 'What data structure is typically used to implement recursion?', 'a' => 'Queue', 'b' => 'Stack', 'c' => 'Heap', 'd' => 'BST', 'ans' => 'b'],
                    ['q' => 'Which sorting algorithm is stable and has O(n log n) worst-case time complexity?', 'a' => 'Quick Sort', 'b' => 'Bubble Sort', 'c' => 'Merge Sort', 'd' => 'Selection Sort', 'ans' => 'c'],
                    ['q' => 'What is the worst-case search time complexity in a balanced Binary Search Tree?', 'a' => 'O(n)', 'b' => 'O(log n)', 'c' => 'O(n log n)', 'd' => 'O(1)', 'ans' => 'b'],
                    ['q' => 'Which data structure stores key-value pairs with O(1) average lookup time?', 'a' => 'Array', 'b' => 'Linked List', 'c' => 'Hash Table', 'd' => 'Trie', 'ans' => 'c'],
                    ['q' => 'Which graph representation is most space-efficient for sparse graphs?', 'a' => 'Adjacency Matrix', 'b' => 'Adjacency List', 'c' => 'Incidence Matrix', 'd' => 'Edge List', 'ans' => 'b'],
                    ['q' => 'What is the maximum number of children a binary tree node can have?', 'a' => '1', 'b' => '2', 'c' => '3', 'd' => 'Unlimited', 'ans' => 'b'],
                    ['q' => 'Which algorithm finds the minimum spanning tree of a graph?', 'a' => 'Dijkstra\'s', 'b' => 'Prim\'s', 'c' => 'Bellman-Ford', 'd' => 'Floyd-Warshall', 'ans' => 'b'],
                    ['q' => 'In a min-heap, where is the minimum element located?', 'a' => 'Root node', 'b' => 'Last leaf node', 'c' => 'Any leaf node', 'd' => 'Middle level', 'ans' => 'a'],
                    ['q' => 'What is the worst-case time complexity of Bubble Sort?', 'a' => 'O(n)', 'b' => 'O(n log n)', 'c' => 'O(n^2)', 'd' => 'O(1)', 'ans' => 'c'],
                    ['q' => 'Which data structure is typically used to implement a Priority Queue?', 'a' => 'Stack', 'b' => 'Queue', 'c' => 'Binary Heap', 'd' => 'Hash Map', 'ans' => 'c'],
                    ['q' => 'What is a collision in a hash table?', 'a' => 'Two keys hashing to different slots', 'b' => 'Two keys hashing to the same slot', 'c' => 'A key failing to hash', 'd' => 'The hash table becoming full', 'ans' => 'b'],
                    ['q' => 'What is the height of a balanced binary tree with n nodes?', 'a' => 'O(n)', 'b' => 'O(log n)', 'c' => 'O(n log n)', 'd' => 'O(1)', 'ans' => 'b'],
                    ['q' => 'Which dynamic programming problem deals with packing items under a weight limit?', 'a' => 'Fibonacci', 'b' => 'LCS', 'c' => 'Knapsack', 'd' => 'Matrix Chain Multiplication', 'ans' => 'c'],
                    ['q' => 'What is the time complexity to access an element in an array by its index?', 'a' => 'O(1)', 'b' => 'O(log n)', 'c' => 'O(n)', 'd' => 'O(n^2)', 'ans' => 'a'],
                    ['q' => 'Which linked list has nodes pointing to both next and previous nodes?', 'a' => 'Singly Linked List', 'b' => 'Circular Linked List', 'c' => 'Doubly Linked List', 'd' => 'Header Linked List', 'ans' => 'c'],
                    ['q' => 'What graph algorithm is used to find all-pairs shortest paths?', 'a' => 'Dijkstra\'s', 'b' => 'Floyd-Warshall', 'c' => 'Kruskal\'s', 'd' => 'Bellman-Ford', 'ans' => 'b'],
                    ['q' => 'In a queue, from which end are elements removed?', 'a' => 'Front', 'b' => 'Rear', 'c' => 'Middle', 'd' => 'Both ends', 'ans' => 'a'],
                ]
            ],
            'Database Management Systems' => [
                'quiz_count' => 10,
                'q_count' => 15,
                'pool' => [
                    ['q' => 'What does the \'A\' in ACID transaction properties stand for?', 'a' => 'Availability', 'b' => 'Atomicity', 'c' => 'Accuracy', 'd' => 'Authority', 'ans' => 'b'],
                    ['q' => 'Which SQL clause is used to filter records after aggregation?', 'a' => 'WHERE', 'b' => 'HAVING', 'c' => 'GROUP BY', 'd' => 'ORDER BY', 'ans' => 'b'],
                    ['q' => 'What is a primary key that consists of more than one column?', 'a' => 'Foreign Key', 'b' => 'Composite Key', 'c' => 'Candidate Key', 'd' => 'Super Key', 'ans' => 'b'],
                    ['q' => 'Which normal form addresses transitively dependent attributes?', 'a' => '1NF', 'b' => '2NF', 'c' => '3NF', 'd' => 'BCNF', 'ans' => 'c'],
                    ['q' => 'What type of join returns all rows from the left table and matched rows from the right?', 'a' => 'Inner Join', 'b' => 'Left Join', 'c' => 'Right Join', 'd' => 'Full Join', 'ans' => 'b'],
                    ['q' => 'What database concept ensures data remains consistent across tables?', 'a' => 'Aggregation', 'b' => 'Integrity Constraints', 'c' => 'Indexing', 'd' => 'Normalization', 'ans' => 'b'],
                    ['q' => 'Which lock level provides the highest concurrency?', 'a' => 'Database Level', 'b' => 'Table Level', 'c' => 'Row Level', 'd' => 'Page Level', 'ans' => 'c'],
                    ['q' => 'What SQL statement is used to remove a table structure from the database?', 'a' => 'DELETE', 'b' => 'TRUNCATE', 'c' => 'DROP TABLE', 'd' => 'REMOVE', 'ans' => 'c'],
                    ['q' => 'What index type is typically used for range queries in SQL databases?', 'a' => 'Hash Index', 'b' => 'B-Tree Index', 'c' => 'Bitmap Index', 'd' => 'Spatial Index', 'ans' => 'b'],
                    ['q' => 'What does \'DML\' stand for in SQL?', 'a' => 'Data Management Language', 'b' => 'Data Manipulation Language', 'c' => 'Data Definition Language', 'd' => 'Dynamic Model Language', 'ans' => 'b'],
                    ['q' => 'Which SQL constraint ensures no duplicate values are entered in a column?', 'a' => 'NOT NULL', 'b' => 'UNIQUE', 'c' => 'CHECK', 'd' => 'DEFAULT', 'ans' => 'b'],
                    ['q' => 'What does a foreign key establish?', 'a' => 'Unique constraints', 'b' => 'Relationship between tables', 'c' => 'Null constraints', 'd' => 'Primary indices', 'ans' => 'b'],
                    ['q' => 'What transaction property ensures changes remain permanent after commit?', 'a' => 'Isolation', 'b' => 'Durability', 'c' => 'Consistency', 'd' => 'Atomicity', 'ans' => 'b'],
                    ['q' => 'What SQL operator is used for pattern matching?', 'a' => 'IN', 'b' => 'LIKE', 'c' => 'BETWEEN', 'd' => 'EXISTS', 'ans' => 'b'],
                    ['q' => 'What is a view in SQL?', 'a' => 'A physical table', 'b' => 'A virtual table', 'c' => 'An index', 'd' => 'A stored procedure', 'ans' => 'b'],
                    ['q' => 'Which command is used to save changes in a database transaction?', 'a' => 'ROLLBACK', 'b' => 'COMMIT', 'c' => 'SAVEPOINT', 'd' => 'GRANT', 'ans' => 'b'],
                    ['q' => 'What does the \'I\' in ACID transaction properties stand for?', 'a' => 'Integrity', 'b' => 'Isolation', 'c' => 'Index', 'd' => 'Instance', 'ans' => 'b'],
                    ['q' => 'What is metadata in database terms?', 'a' => 'Encrypted data', 'b' => 'Data about data', 'c' => 'Backup data', 'd' => 'Temporary data', 'ans' => 'b'],
                    ['q' => 'Which function calculates the average value of a numeric column?', 'a' => 'SUM()', 'b' => 'AVG()', 'c' => 'COUNT()', 'd' => 'MIN()', 'ans' => 'b'],
                    ['q' => 'What is a schema in a database?', 'a' => 'Logical structure of the database', 'b' => 'Physical location of data', 'c' => 'User credentials', 'd' => 'Hardware configuration', 'ans' => 'a'],
                ]
            ],
            'Web Development' => [
                'quiz_count' => 5,
                'q_count' => 10,
                'pool' => [
                    ['q' => 'Which HTML5 tag is used to embed video content?', 'a' => '<media>', 'b' => '<embed>', 'c' => '<video>', 'd' => '<source>', 'ans' => 'c'],
                    ['q' => 'Which CSS property is used to change the text color?', 'a' => 'font-color', 'b' => 'color', 'c' => 'text-color', 'd' => 'background-color', 'ans' => 'b'],
                    ['q' => 'What does CSS stand for?', 'a' => 'Computer Style Sheets', 'b' => 'Creative Style Sheets', 'c' => 'Cascading Style Sheets', 'd' => 'Colorful Style Sheets', 'ans' => 'c'],
                    ['q' => 'Which JavaScript method writes logs to the browser console?', 'a' => 'console.write()', 'b' => 'console.log()', 'c' => 'console.print()', 'd' => 'console.error()', 'ans' => 'b'],
                    ['q' => 'What HTTP method is used to submit form data to a server?', 'a' => 'GET', 'b' => 'POST', 'c' => 'PUT', 'd' => 'DELETE', 'ans' => 'b'],
                    ['q' => 'Which CSS layout model allows easy 1D alignment of elements?', 'a' => 'Block', 'b' => 'Flexbox', 'c' => 'Grid', 'd' => 'Inline', 'ans' => 'b'],
                    ['q' => 'What does DOM stand for?', 'a' => 'Document Object Model', 'b' => 'Digital Object Model', 'c' => 'Data Object Management', 'd' => 'Directory Object Model', 'ans' => 'a'],
                    ['q' => 'Which unit is relative to the font-size of the root element in CSS?', 'a' => 'em', 'b' => 'rem', 'c' => 'px', 'd' => 'vh', 'ans' => 'b'],
                    ['q' => 'What JavaScript keyword declares a block-scoped variable?', 'a' => 'var', 'b' => 'let', 'c' => 'global', 'd' => 'define', 'ans' => 'b'],
                    ['q' => 'Which HTML element is used for the largest heading?', 'a' => '<h6>', 'b' => '<h1>', 'c' => '<head>', 'd' => '<heading>', 'ans' => 'b'],
                    ['q' => 'What is the purpose of the \'alt\' attribute on images?', 'a' => 'Image styling', 'b' => 'Alternate text description', 'c' => 'Tooltip popup', 'd' => 'Source link', 'ans' => 'b'],
                    ['q' => 'Which HTTP status code represents \'Not Found\'?', 'a' => '200', 'b' => '404', 'c' => '500', 'd' => '403', 'ans' => 'b'],
                    ['q' => 'Which CSS framework uses utility classes?', 'a' => 'Bootstrap', 'b' => 'Tailwind CSS', 'c' => 'Bulma', 'd' => 'Sass', 'ans' => 'b'],
                    ['q' => 'What format is commonly used to exchange data between client and server?', 'a' => 'XML', 'b' => 'JSON', 'c' => 'CSV', 'd' => 'YAML', 'ans' => 'b'],
                    ['q' => 'In JavaScript, how do you add an element to the end of an array?', 'a' => 'pop()', 'b' => 'push()', 'c' => 'shift()', 'd' => 'unshift()', 'ans' => 'b'],
                    ['q' => 'What does API stand for?', 'a' => 'Application Programming Interface', 'b' => 'Applied Process Integration', 'c' => 'Adaptive Protocol Interface', 'd' => 'Abstract Programming Instance', 'ans' => 'a'],
                    ['q' => 'Which tag is used to link an external CSS file?', 'a' => '<style>', 'b' => '<link>', 'c' => '<script>', 'd' => '<href>', 'ans' => 'b'],
                    ['q' => 'What is the default display property of a <div> element?', 'a' => 'inline', 'b' => 'block', 'c' => 'flex', 'd' => 'inline-block', 'ans' => 'b'],
                    ['q' => 'Which JavaScript function parses a JSON string into an object?', 'a' => 'JSON.stringify()', 'b' => 'JSON.parse()', 'c' => 'JSON.convert()', 'd' => 'JSON.object()', 'ans' => 'b'],
                    ['q' => 'Which HTML tag is used to create an unordered list?', 'a' => '<ol>', 'b' => '<ul>', 'c' => '<li>', 'd' => '<list>', 'ans' => 'b'],
                ]
            ],
            'Operating Systems' => [
                'quiz_count' => 8,
                'q_count' => 12,
                'pool' => [
                    ['q' => 'What is a deadlock in Operating Systems?', 'a' => 'A crashed kernel', 'b' => 'A state where processes are blocked waiting for resources', 'c' => 'A locked hard drive', 'd' => 'A process executing too fast', 'ans' => 'b'],
                    ['q' => 'Which scheduling algorithm is non-preemptive and selects the shortest task?', 'a' => 'Round Robin', 'b' => 'SJF (Shortest Job First)', 'c' => 'FIFO', 'd' => 'Priority Scheduling', 'ans' => 'b'],
                    ['q' => 'What is thrashing in memory management?', 'a' => 'Defragmentation of disk', 'b' => 'High paging activity with low CPU utilization', 'c' => 'Wiping the RAM', 'd' => 'Memory leakage', 'ans' => 'b'],
                    ['q' => 'Which memory allocation scheme suffers from external fragmentation?', 'a' => 'Paging', 'b' => 'Segmentation', 'c' => 'Virtual Memory', 'd' => 'Cache Memory', 'ans' => 'b'],
                    ['q' => 'What is a critical section?', 'a' => 'Code segment accessing shared resources', 'b' => 'Boot sector of disk', 'c' => 'Memory block allocated for kernel', 'd' => 'Task scheduler', 'ans' => 'a'],
                    ['q' => 'Which system call creates a new process in Unix-like systems?', 'a' => 'exec()', 'b' => 'fork()', 'c' => 'wait()', 'd' => 'exit()', 'ans' => 'b'],
                    ['q' => 'What is virtual memory?', 'a' => 'RAM cache', 'b' => 'Extension of main memory using disk storage', 'c' => 'Emulated flash memory', 'd' => 'Cloud backup', 'ans' => 'b'],
                    ['q' => 'What component manages CPU resource allocation?', 'a' => 'Assembler', 'b' => 'Scheduler', 'c' => 'Hypervisor', 'd' => 'Linker', 'ans' => 'b'],
                    ['q' => 'Which page replacement algorithm suffers from Belady\'s anomaly?', 'a' => 'LRU', 'b' => 'FIFO', 'c' => 'Optimal', 'd' => 'LFU', 'ans' => 'b'],
                    ['q' => 'What is a Process Control Block (PCB)?', 'a' => 'A CPU component', 'b' => 'Data structure holding process info', 'c' => 'Disk partition control', 'd' => 'Kernel security check', 'ans' => 'b'],
                    ['q' => 'What is context switching?', 'a' => 'Saving and restoring CPU state of processes', 'b' => 'Modifying user variables', 'c' => 'Disk read/write head movement', 'd' => 'Swapping power states', 'ans' => 'a'],
                    ['q' => 'Which lock mechanism uses integer values for synchronization?', 'a' => 'Mutex', 'b' => 'Semaphore', 'c' => 'Monitor', 'd' => 'Condition Variable', 'ans' => 'b'],
                    ['q' => 'What does GUI stand for?', 'a' => 'Graphical User Interface', 'b' => 'General Utility Interface', 'c' => 'Global Unit Identifier', 'd' => 'Guided User Instance', 'ans' => 'a'],
                    ['q' => 'What is a thread?', 'a' => 'A network packet', 'b' => 'Lightweight unit of execution', 'c' => 'A security policy', 'd' => 'A type of bus', 'ans' => 'b'],
                    ['q' => 'Which partition scheme divides memory into fixed-size frames?', 'a' => 'Segmentation', 'b' => 'Paging', 'c' => 'Dynamic partitioning', 'd' => 'Compaction', 'ans' => 'b'],
                    ['q' => 'What is the role of device drivers?', 'a' => 'Manage system backups', 'b' => 'Translate OS commands for hardware devices', 'c' => 'Optimize database queries', 'd' => 'Provide UI styling', 'ans' => 'b'],
                    ['q' => 'What scheduling algorithm gives a time slice to each process?', 'a' => 'SJF', 'b' => 'Round Robin', 'c' => 'FIFO', 'd' => 'Multilevel Queue', 'ans' => 'b'],
                    ['q' => 'Which command is used to view running processes in Linux?', 'a' => 'df', 'b' => 'ps', 'c' => 'ls', 'd' => 'cat', 'ans' => 'b'],
                    ['q' => 'What is kernel mode?', 'a' => 'User GUI environment', 'b' => 'Privileged execution mode for OS code', 'c' => 'Safe mode boot option', 'd' => 'Defragmentation module', 'ans' => 'b'],
                    ['q' => 'What is a shell?', 'a' => 'Hardware chassis', 'b' => 'Command line interpreter for OS', 'c' => 'Database storage index', 'd' => 'File compression format', 'ans' => 'b'],
                ]
            ],
            'Computer Networks' => [
                'quiz_count' => 6,
                'q_count' => 10,
                'pool' => [
                    ['q' => 'Which layer of the OSI model handles packet routing?', 'a' => 'Transport Layer', 'b' => 'Network Layer', 'c' => 'Data Link Layer', 'd' => 'Session Layer', 'ans' => 'b'],
                    ['q' => 'What does TCP stand for?', 'a' => 'Terminal Connection Protocol', 'b' => 'Transmission Control Protocol', 'c' => 'Traffic Control Process', 'd' => 'Telecom Carrier Port', 'ans' => 'b'],
                    ['q' => 'Which port is the default for secure HTTPS communication?', 'a' => '80', 'b' => '443', 'c' => '22', 'd' => '8080', 'ans' => 'b'],
                    ['q' => 'What is the primary purpose of DNS?', 'a' => 'Encrypt email traffic', 'b' => 'Translate domain names to IP addresses', 'c' => 'Route network packets', 'd' => 'Host website files', 'ans' => 'b'],
                    ['q' => 'Which transport protocol is connectionless and lightweight?', 'a' => 'TCP', 'b' => 'UDP', 'c' => 'SCTP', 'd' => 'FTP', 'ans' => 'b'],
                    ['q' => 'What is the size of an IPv4 address?', 'a' => '16 bits', 'b' => '32 bits', 'c' => '64 bits', 'd' => '128 bits', 'ans' => 'b'],
                    ['q' => 'Which OSI layer handles physical transmission media?', 'a' => 'Application', 'b' => 'Physical Layer', 'c' => 'Presentation', 'd' => 'Network', 'ans' => 'b'],
                    ['q' => 'What does DHCP stand for?', 'a' => 'Dynamic Host Configuration Protocol', 'b' => 'Domain Host Control Protocol', 'c' => 'Distributed Hash Carrier Process', 'd' => 'Database Home Connection Port', 'ans' => 'a'],
                    ['q' => 'Which device forwards packets between networks?', 'a' => 'Hub', 'b' => 'Router', 'c' => 'Switch', 'd' => 'Modem', 'ans' => 'b'],
                    ['q' => 'What is the size of an IPv6 address?', 'a' => '32 bits', 'b' => '128 bits', 'c' => '256 bits', 'd' => '512 bits', 'ans' => 'b'],
                    ['q' => 'Which protocol is used for secure remote command-line access?', 'a' => 'Telnet', 'b' => 'SSH', 'c' => 'FTP', 'd' => 'SMTP', 'ans' => 'b'],
                    ['q' => 'What does MAC stand for in MAC address?', 'a' => 'Media Access Control', 'b' => 'Main Address Code', 'c' => 'Model Alignment Card', 'd' => 'Meta Access Connection', 'ans' => 'a'],
                    ['q' => 'Which OSI layer is responsible for node-to-node frame delivery?', 'a' => 'Physical', 'b' => 'Data Link Layer', 'c' => 'Network', 'd' => 'Transport', 'ans' => 'b'],
                    ['q' => 'What port does unencrypted HTTP use?', 'a' => '21', 'b' => '80', 'c' => '443', 'd' => '25', 'ans' => 'b'],
                    ['q' => 'What does CIDR stand for?', 'a' => 'Classless Inter-Domain Routing', 'b' => 'Computer Internet Delivery Route', 'c' => 'Central IP Distribution Record', 'd' => 'Carrier Integrated Data Resource', 'ans' => 'a'],
                    ['q' => 'Which command tests network connectivity to a host?', 'a' => 'ping', 'b' => 'ifconfig', 'c' => 'traceroute', 'd' => 'netstat', 'ans' => 'a'],
                    ['q' => 'What is NAT?', 'a' => 'Network Address Translation', 'b' => 'Node Allocation Table', 'c' => 'Network Asset Tracking', 'd' => 'Numeric Address Translator', 'ans' => 'a'],
                    ['q' => 'Which network topology connects all devices to a central hub?', 'a' => 'Bus', 'b' => 'Star', 'c' => 'Ring', 'd' => 'Mesh', 'ans' => 'b'],
                    ['q' => 'What is a subnet mask used for?', 'a' => 'Encrypt IP packets', 'b' => 'Identify network and host portions of IP', 'c' => 'Block hacker traffic', 'd' => 'Convert IPv4 to IPv6', 'ans' => 'b'],
                    ['q' => 'Which protocol is used to transfer files securely?', 'a' => 'FTP', 'b' => 'SFTP', 'c' => 'TFTP', 'd' => 'SMTP', 'ans' => 'b'],
                ]
            ],
            'Object Oriented Programming' => [
                'quiz_count' => 4,
                'q_count' => 15,
                'pool' => [
                    ['q' => 'Which OOP principle binds data and methods together in a single unit?', 'a' => 'Polymorphism', 'b' => 'Encapsulation', 'c' => 'Inheritance', 'd' => 'Abstraction', 'ans' => 'b'],
                    ['q' => 'What is polymorphism in Object Oriented Programming?', 'a' => 'Restricting member access', 'b' => 'Ability of an object to take many forms', 'c' => 'Creating multiple class structures', 'd' => 'Garbage collection process', 'ans' => 'b'],
                    ['q' => 'What OOP concept allows a class to inherit properties from another class?', 'a' => 'Abstraction', 'b' => 'Inheritance', 'c' => 'Encapsulation', 'd' => 'Aggregation', 'ans' => 'b'],
                    ['q' => 'What is an abstract class?', 'a' => 'A class that has no variables', 'b' => 'A class that cannot be instantiated', 'c' => 'A class that holds global configurations', 'd' => 'A system-defined interface', 'ans' => 'b'],
                    ['q' => 'Which keyword is typically used to create an instance of a class?', 'a' => 'class', 'b' => 'new', 'c' => 'create', 'd' => 'instance', 'ans' => 'b'],
                    ['q' => 'What is method overloading?', 'a' => 'Inheriting a method', 'b' => 'Same method name with different parameters', 'c' => 'Modifying private variables', 'd' => 'Using parent constructors', 'ans' => 'b'],
                    ['q' => 'What is method overriding?', 'a' => 'Calling private class methods', 'b' => 'Child class redefining parent class method', 'c' => 'Registering event listeners', 'd' => 'Destructing class objects', 'ans' => 'b'],
                    ['q' => 'What is a constructor in OOP?', 'a' => 'A garbage collector tool', 'b' => 'Special method to initialize objects', 'c' => 'A structural compiler hook', 'd' => 'A class cloning system', 'ans' => 'b'],
                    ['q' => 'Which visibility modifier restricts access exclusively to the defining class?', 'a' => 'public', 'b' => 'private', 'c' => 'protected', 'd' => 'default', 'ans' => 'b'],
                    ['q' => 'Which OOP principle hides complex implementation details?', 'a' => 'Inheritance', 'b' => 'Abstraction', 'c' => 'Encapsulation', 'd' => 'Coupling', 'ans' => 'b'],
                    ['q' => 'What is an interface in OOP?', 'a' => 'A graphical UI screen', 'b' => 'Contract defining methods without implementation', 'c' => 'A helper utility module', 'd' => 'A base database representation', 'ans' => 'b'],
                    ['q' => 'Which keyword refers to the current object instance?', 'a' => 'super', 'b' => 'this', 'c' => 'self', 'd' => 'parent', 'ans' => 'b'],
                    ['q' => 'What is multiple inheritance?', 'a' => 'Class inheriting from subclasses', 'b' => 'Class inheriting from more than one class', 'c' => 'Multiple classes inheriting from one parent', 'd' => 'Deep level hierarchy', 'ans' => 'b'],
                    ['q' => 'What is a subclass?', 'a' => 'A helper system module', 'b' => 'Class that inherits from a superclass', 'c' => 'An abstract class interface', 'd' => 'An anonymous nested class', 'ans' => 'b'],
                    ['q' => 'Which visibility modifier allows access to subclasses and within the package?', 'a' => 'private', 'b' => 'protected', 'c' => 'public', 'd' => 'internal', 'ans' => 'b'],
                    ['q' => 'What is a destructor?', 'a' => 'A memory wiper tool', 'b' => 'Method called when an object is destroyed', 'c' => 'An exception handling block', 'd' => 'An assembler instruction', 'ans' => 'b'],
                    ['q' => 'What is composition?', 'a' => 'An "is-a" relationship', 'b' => 'A "has-a" relationship between objects', 'c' => 'Inheriting interfaces', 'd' => 'Aggregating static classes', 'ans' => 'b'],
                    ['q' => 'What is a static method?', 'a' => 'A method that cannot be modified', 'b' => 'Method belonging to the class, not instance', 'c' => 'A method that does not return values', 'd' => 'A local callback function', 'ans' => 'b'],
                    ['q' => 'What is a final class?', 'a' => 'An empty class blueprint', 'b' => 'Class that cannot be inherited', 'c' => 'A system memory block class', 'd' => 'The class that loads last', 'ans' => 'b'],
                    ['q' => 'What is instantiation?', 'a' => 'Defining classes', 'b' => 'Process of creating an object from a class', 'c' => 'Running unit tests', 'd' => 'Checking type casting', 'ans' => 'b'],
                ]
            ],
            'Software Engineering' => [
                'quiz_count' => 3,
                'q_count' => 8,
                'pool' => [
                    ['q' => 'Which software process model is sequential and linear?', 'a' => 'Spiral', 'b' => 'Agile', 'c' => 'Waterfall', 'd' => 'RAD', 'ans' => 'c'],
                    ['q' => 'What does Scrum use to plan and execute tasks in cycles?', 'a' => 'Milestones', 'b' => 'Sprints', 'c' => 'Gantt Charts', 'd' => 'Phases', 'ans' => 'b'],
                    ['q' => 'What does UML stand for?', 'a' => 'Universal Model Language', 'b' => 'Unified Modeling Language', 'c' => 'User Map Layout', 'd' => 'Unified Markup Line', 'ans' => 'b'],
                    ['q' => 'What type of testing focuses on code coverage, paths, and logic?', 'a' => 'Black Box Testing', 'b' => 'White Box Testing', 'c' => 'Integration Testing', 'd' => 'Beta Testing', 'ans' => 'b'],
                    ['q' => 'What is the goal of code refactoring?', 'a' => 'Add new features', 'b' => 'Improves internal code structure without changing behavior', 'c' => 'Fix runtime errors', 'd' => 'Deploy code to server', 'ans' => 'b'],
                    ['q' => 'What is git?', 'a' => 'An IDE editor', 'b' => 'Version control system', 'c' => 'A cloud host server', 'd' => 'A debugger tool', 'ans' => 'b'],
                    ['q' => 'Which phase gathers user expectations and project scope?', 'a' => 'Design', 'b' => 'Requirements Analysis', 'c' => 'Testing', 'd' => 'Maintenance', 'ans' => 'b'],
                    ['q' => 'What is regression testing?', 'a' => 'Testing code under high load', 'b' => 'Verifying that new changes didn\'t break existing features', 'c' => 'Reviewing security keys', 'd' => 'Initial deployment tests', 'ans' => 'b'],
                    ['q' => 'What does CI/CD stand for?', 'a' => 'Code Integration / Code Deployment', 'b' => 'Continuous Integration / Continuous Deployment', 'c' => 'Control Instance / Control Distribution', 'd' => 'Computer Interface / Computer Database', 'ans' => 'b'],
                    ['q' => 'What is a user story?', 'a' => 'A marketing case study', 'b' => 'Short description of a feature from user perspective', 'c' => 'A bug track ticket', 'd' => 'System architectural diagram', 'ans' => 'b'],
                    ['q' => 'What type of testing is performed by actual users before release?', 'a' => 'Alpha Testing', 'b' => 'Beta Testing', 'c' => 'Unit Testing', 'd' => 'Stress Testing', 'ans' => 'b'],
                    ['q' => 'What does MVC stand for in design patterns?', 'a' => 'Module-Variable-Class', 'b' => 'Model-View-Controller', 'c' => 'Management-Volume-Cache', 'd' => 'Machine-Verify-Control', 'ans' => 'b'],
                    ['q' => 'What is technical debt?', 'a' => 'Cloud licensing fees', 'b' => 'Cost of additional rework caused by choosing easy solutions', 'c' => 'Server hardware costs', 'd' => 'Unpaid code developer invoices', 'ans' => 'b'],
                    ['q' => 'What is black box testing?', 'a' => 'Testing dark mode UI layout', 'b' => 'Testing software without knowing internal structure', 'c' => 'Testing system hardware parts', 'd' => 'Testing code logic branches', 'ans' => 'b'],
                    ['q' => 'What is a design pattern?', 'a' => 'A graphic design template', 'b' => 'Reusable solution to a common software design problem', 'c' => 'A file compiler script', 'd' => 'A code repository format', 'ans' => 'b'],
                    ['q' => 'Which git command merges branch changes?', 'a' => 'git push', 'b' => 'git merge', 'c' => 'git fetch', 'd' => 'git checkout', 'ans' => 'b'],
                    ['q' => 'What is the prototype model?', 'a' => 'Writing final production code first', 'b' => 'Creating a simplified mock version of software first', 'c' => 'Applying database keys', 'd' => 'Running CI pipelines', 'ans' => 'b'],
                    ['q' => 'What is static code analysis?', 'a' => 'Compiling machine code', 'b' => 'Analyzing code without executing it', 'c' => 'Running functional tests', 'd' => 'Database index mapping', 'ans' => 'b'],
                    ['q' => 'What does QA stand for in software development?', 'a' => 'Quick Assessment', 'b' => 'Quality Assurance', 'c' => 'Query Allocation', 'd' => 'Queue Administration', 'ans' => 'b'],
                    ['q' => 'What is a software bug?', 'a' => 'A computer hardware chip failure', 'b' => 'An error or flaw in software behavior', 'c' => 'A server maintenance window', 'd' => 'A network router timeout', 'ans' => 'b'],
                ]
            ],
            'Compiler Design' => [
                'quiz_count' => 4,
                'q_count' => 10,
                'pool' => [
                    ['q' => 'Which compiler phase performs lexical analysis?', 'a' => 'Parser', 'b' => 'Lexical Analyzer (Scanner)', 'c' => 'Semantic Analyzer', 'd' => 'Code Generator', 'ans' => 'b'],
                    ['q' => 'What is a syntax tree?', 'a' => 'A flat database index', 'b' => 'Tree representation of program structure', 'c' => 'A network router table', 'd' => 'A memory pointer stack', 'ans' => 'b'],
                    ['q' => 'What does a parser output?', 'a' => 'Tokens', 'b' => 'Parse Tree', 'c' => 'Machine Code', 'd' => 'Object Code', 'ans' => 'b'],
                    ['q' => 'What is a token in lexical analysis?', 'a' => 'An OS scheduling priority', 'b' => 'Sequence of characters with collective meaning', 'c' => 'A database schema key', 'd' => 'A network packet header', 'ans' => 'b'],
                    ['q' => 'Which phase checks for type compatibility?', 'a' => 'Lexical Scanner', 'b' => 'Semantic Analysis', 'c' => 'Syntax Parser', 'd' => 'Optimization Module', 'ans' => 'b'],
                    ['q' => 'What is three-address code?', 'a' => 'An IP network address', 'b' => 'Intermediate code representation', 'c' => 'Memory address pointer', 'd' => 'Assembly code instruction', 'ans' => 'b'],
                    ['q' => 'What tool generates lexical analyzers?', 'a' => 'Yacc', 'b' => 'Lex (or Flex)', 'c' => 'GCC', 'd' => 'Valgrind', 'ans' => 'b'],
                    ['q' => 'What tool generates syntax analyzers?', 'a' => 'Flex', 'b' => 'Yacc (or Bison)', 'c' => 'Make', 'd' => 'GDB', 'ans' => 'b'],
                    ['q' => 'What is code optimization in compilers?', 'a' => 'Fixing runtime code bugs', 'b' => 'Improving execution speed or reducing size', 'c' => 'Writing comments to code', 'd' => 'Formatting code indentation', 'ans' => 'b'],
                    ['q' => 'What is a symbol table?', 'a' => 'A compilation logging file', 'b' => 'Data structure storing variable names and types', 'c' => 'A list of ASCII codes', 'd' => 'A CPU register array', 'ans' => 'b'],
                    ['q' => 'Which grammar represents programming languages syntax?', 'a' => 'Regular Grammar', 'b' => 'Context-Free Grammar', 'c' => 'Context-Sensitive Grammar', 'd' => 'Unrestricted Grammar', 'ans' => 'b'],
                    ['q' => 'What does DAG stand for in compiler optimization?', 'a' => 'Digital Array Graph', 'b' => 'Directed Acyclic Graph', 'c' => 'Distributed Active Grid', 'd' => 'Directed Array Group', 'ans' => 'b'],
                    ['q' => 'What is garbage collection?', 'a' => 'Defragmentation of disk', 'b' => 'Automatic memory reclamation', 'c' => 'Deleting user accounts', 'd' => 'Cleaning network logs', 'ans' => 'b'],
                    ['q' => 'What is loop unrolling?', 'a' => 'Removing recursive functions', 'b' => 'Code optimization duplicating loop bodies', 'c' => 'Optimizing database tables', 'd' => 'Deleting loop parameters', 'ans' => 'b'],
                    ['q' => 'Which parsing method is top-down?', 'a' => 'LR Parsing', 'b' => 'LL Parsing', 'c' => 'LALR Parsing', 'd' => 'SLR Parsing', 'ans' => 'b'],
                    ['q' => 'Which parsing method is bottom-up?', 'a' => 'LL Parsing', 'b' => 'LR Parsing', 'c' => 'Recursive Descent', 'd' => 'Predictive Parsing', 'ans' => 'b'],
                    ['q' => 'What is dead code elimination?', 'a' => 'Fixing memory leak spots', 'b' => 'Removing code that has no effect', 'c' => 'Deleting unused directories', 'd' => 'Releasing locked resources', 'ans' => 'b'],
                    ['q' => 'What is register allocation?', 'a' => 'Configuring CPU voltage', 'b' => 'Mapping program variables to CPU registers', 'c' => 'Allocating swap partitions', 'd' => 'Caching database rows', 'ans' => 'b'],
                    ['q' => 'What is the target of a compiler?', 'a' => 'High-level script', 'b' => 'Machine Code', 'c' => 'Source code file', 'd' => 'XML schema config', 'ans' => 'b'],
                    ['q' => 'What is bootstrapping in compiler design?', 'a' => 'Booting up the computer OS', 'b' => 'Writing a compiler in its own language', 'c' => 'Optimizing loop execution', 'd' => 'Loading device drivers', 'ans' => 'b'],
                ]
            ],
            'Theory of Computation' => [
                'quiz_count' => 5,
                'q_count' => 12,
                'pool' => [
                    ['q' => 'What does DFA stand for in TOC?', 'a' => 'Direct File Allocator', 'b' => 'Deterministic Finite Automaton', 'c' => 'Digital Flow Array', 'd' => 'Domain File Assembly', 'ans' => 'b'],
                    ['q' => 'Which language is accepted by a Pushdown Automaton?', 'a' => 'Regular Language', 'b' => 'Context-Free Language', 'c' => 'Context-Sensitive Language', 'd' => 'Recursive Language', 'ans' => 'b'],
                    ['q' => 'What does a Turing Machine represent?', 'a' => 'A physical hardware engine', 'b' => 'Mathematical model of computation', 'c' => 'A database index searcher', 'd' => 'An IP network router', 'ans' => 'b'],
                    ['q' => 'What is a regular expression?', 'a' => 'A syntax parsing compiler stage', 'b' => 'Sequence defining search pattern for languages', 'c' => 'A mathematical proof formula', 'd' => 'A database constraint key', 'ans' => 'b'],
                    ['q' => 'Which grammar generates context-free languages?', 'a' => 'Type-0', 'b' => 'Type-2', 'c' => 'Type-1', 'd' => 'Type-3', 'ans' => 'b'],
                    ['q' => 'What is the halting problem?', 'a' => 'A hardware failure on server boot', 'b' => 'Decidability problem of whether program terminates', 'c' => 'A memory leak stack crash', 'd' => 'A process deadlock situation', 'ans' => 'b'],
                    ['q' => 'What class of languages is accepted by Finite Automata?', 'a' => 'Context-Free Languages', 'b' => 'Regular Languages', 'c' => 'Context-Sensitive Languages', 'd' => 'Decidable Languages', 'ans' => 'b'],
                    ['q' => 'What automaton accepts Context-Sensitive Languages?', 'a' => 'Pushdown Automaton', 'b' => 'Linear Bounded Automaton', 'c' => 'Finite State Automaton', 'd' => 'Turing Machine', 'ans' => 'b'],
                    ['q' => 'What does NP-complete mean?', 'a' => 'Solvable in polynomial time', 'b' => 'Hardest problems in NP class', 'c' => 'Unsolvable system problems', 'd' => 'Linear time complexity tasks', 'ans' => 'b'],
                    ['q' => 'What does P equal NP ask?', 'a' => 'Whether multiplication is division', 'b' => 'Whether verification is as easy as solving', 'c' => 'Whether loops are functions', 'd' => 'Whether variables are constants', 'ans' => 'b'],
                    ['q' => 'What is an alphabet in TOC?', 'a' => 'Letters A to Z', 'b' => 'Finite set of symbols', 'c' => 'A code variables registry', 'd' => 'A string text variable', 'ans' => 'b'],
                    ['q' => 'What is a non-deterministic machine?', 'a' => 'A machine that breaks randomly', 'b' => 'Machine that can have multiple next states', 'c' => 'A machine with cloud storage', 'd' => 'A CPU processing processor', 'ans' => 'b'],
                    ['q' => 'What is a context-free grammar?', 'a' => 'A grammar with multiple strings on left', 'b' => 'Grammar with single non-terminal on left', 'c' => 'An regex pattern compiler', 'd' => 'An assembler module structure', 'ans' => 'b'],
                    ['q' => 'What is a grammar in TOC?', 'a' => 'Text writing rules', 'b' => 'Mathematical description of language syntax', 'c' => 'A compilation library module', 'd' => 'An array index structure', 'ans' => 'b'],
                    ['q' => 'What is decidability?', 'a' => 'Compilation correctness check', 'b' => 'Ability of an algorithm to answer yes/no for all inputs', 'c' => 'Selecting scheduling priorities', 'd' => 'Type checking of variables', 'ans' => 'b'],
                    ['q' => 'What is Chomsky hierarchy?', 'a' => 'A database table structure', 'b' => 'Classification of formal grammars', 'c' => 'CPU pipeline stages layout', 'd' => 'A sorting algorithm pattern', 'ans' => 'b'],
                    ['q' => 'What is pumping lemma used for?', 'a' => 'Optimizing search index tables', 'b' => 'Proving a language is not regular or context-free', 'c' => 'Running recursive algorithms', 'd' => 'Calculating CPU latency times', 'ans' => 'b'],
                    ['q' => 'What is Kleene closure (Kleene star)?', 'a' => 'An database index key check', 'b' => 'Zero or more concatenations of symbols', 'c' => 'A process termination signal', 'd' => 'An OOP visibility modifier', 'ans' => 'b'],
                    ['q' => 'What pushdown automaton storage structure is used?', 'a' => 'Queue', 'b' => 'Stack', 'c' => 'Heap', 'd' => 'Register', 'ans' => 'b'],
                    ['q' => 'What is recursively enumerable language?', 'a' => 'Regular language', 'b' => 'Language recognized by Turing Machine', 'c' => 'An local scope variable', 'd' => 'An assembly file target', 'ans' => 'b'],
                ]
            ],
            'Artificial Intelligence' => [
                'quiz_count' => 7,
                'q_count' => 15,
                'pool' => [
                    ['q' => 'What does A* search use to evaluate nodes?', 'a' => 'Depth count', 'b' => 'Heuristic function', 'c' => 'Memory stack size', 'd' => 'Network latency value', 'ans' => 'b'],
                    ['q' => 'What is heuristic search?', 'a' => 'An exact mathematical search', 'b' => 'Search using guidelines to find solutions faster', 'c' => 'An random search walk', 'd' => 'An linear search scan', 'ans' => 'b'],
                    ['q' => 'What does the Turing Test evaluate?', 'a' => 'Processor execution speed', 'b' => 'Machine\'s intelligent behavior equivalent to human', 'c' => 'Memory leakage checks', 'd' => 'Database index load times', 'ans' => 'b'],
                    ['q' => 'Which algorithm is used in game playing for min-max choices?', 'a' => 'Dijkstra\'s', 'b' => 'Minimax', 'c' => 'A* Search', 'd' => 'Kruskal\'s', 'ans' => 'b'],
                    ['q' => 'What is a neural network?', 'a' => 'A network of fiber optic cables', 'b' => 'Model inspired by biological brain structures', 'c' => 'A database table structure', 'd' => 'A parallel processor bus', 'ans' => 'b'],
                    ['q' => 'What does NLP stand for in AI?', 'a' => 'Network Loop Process', 'b' => 'Natural Language Processing', 'c' => 'Numeric Logic Processor', 'd' => 'Node Link Protocol', 'ans' => 'b'],
                    ['q' => 'What is an expert system?', 'a' => 'An experienced programmer editor', 'b' => 'System simulating decision-making of human experts', 'c' => 'A fast compiler software tool', 'd' => 'A high speed database engine', 'ans' => 'b'],
                    ['q' => 'Which search algorithm is uninformed and guarantees shortest path?', 'a' => 'DFS', 'b' => 'BFS', 'c' => 'Greedy Search', 'd' => 'Hill Climbing', 'ans' => 'b'],
                    ['q' => 'What does KB stand for in AI systems?', 'a' => 'Kilobyte storage', 'b' => 'Knowledge Base', 'c' => 'Key Board input', 'd' => 'Kernel Binary', 'ans' => 'b'],
                    ['q' => 'What is machine learning?', 'a' => 'Hardware automated assembly lines', 'b' => 'Algorithms learning from data without explicit coding', 'c' => 'Manual coding of logic states', 'd' => 'Installing libraries on server', 'ans' => 'b'],
                    ['q' => 'What is a genetic algorithm?', 'a' => 'A biology database code', 'b' => 'Optimization algorithm based on natural selection', 'c' => 'A recursive code function', 'd' => 'A sorting algorithm code', 'ans' => 'b'],
                    ['q' => 'What does deep learning use?', 'a' => 'Flat database lists', 'b' => 'Multi-layered neural networks', 'c' => 'Single logic gates code', 'd' => 'Assembly code loop lines', 'ans' => 'b'],
                    ['q' => 'What is reinforcement learning?', 'a' => 'Manual copy of database rows', 'b' => 'Learning based on reward and punishment', 'c' => 'Compiler type checking logic', 'd' => 'Network bandwidth scaling tests', 'ans' => 'b'],
                    ['q' => 'What is computer vision?', 'a' => 'A hardware graphics card screen', 'b' => 'Extracting information from digital images', 'c' => 'Viewing database logs in console', 'd' => 'A text editing window IDE', 'ans' => 'b'],
                    ['q' => 'What is pruning in search trees?', 'a' => 'Deleting unused code files', 'b' => 'Eliminating branches to reduce search space', 'c' => 'Running sorting logic loops', 'd' => 'Compiling C libraries', 'ans' => 'b'],
                    ['q' => 'What is a chatbot?', 'a' => 'A network router program', 'b' => 'Software conducting conversational text/voice interactions', 'c' => 'A database table indexer', 'd' => 'An compilation logging logger', 'ans' => 'b'],
                    ['q' => 'What is fuzzy logic?', 'a' => 'An broken syntax code logic', 'b' => 'Logic based on degrees of truth rather than binary', 'c' => 'A parallel processing register', 'd' => 'A memory pointer address', 'ans' => 'b'],
                    ['q' => 'What is an inference engine?', 'a' => 'An database backup module', 'b' => 'Brain of expert system applying rules to data', 'c' => 'An execution loop parser', 'd' => 'An assembler target compiler', 'ans' => 'b'],
                    ['q' => 'What is propositional logic?', 'a' => 'An database query language', 'b' => 'Logic dealing with variables representing assertions', 'c' => 'An regular expression pattern', 'd' => 'An OOP visibility modifier code', 'ans' => 'b'],
                    ['q' => 'What is over-fitting in AI?', 'a' => 'Model running out of RAM storage', 'b' => 'Model learning noise instead of general patterns', 'c' => 'An endless execution code loop', 'd' => 'Compiler syntax match error', 'ans' => 'b'],
                ]
            ],
            'Machine Learning' => [
                'quiz_count' => 6,
                'q_count' => 15,
                'pool' => [
                    ['q' => 'Which ML type uses labeled data for training?', 'a' => 'Unsupervised Learning', 'b' => 'Supervised Learning', 'c' => 'Reinforcement Learning', 'd' => 'Semi-supervised Learning', 'ans' => 'b'],
                    ['q' => 'What algorithm is commonly used for linear regression optimization?', 'a' => 'K-Means', 'b' => 'Gradient Descent', 'c' => 'Decision Tree', 'd' => 'Apriori', 'ans' => 'b'],
                    ['q' => 'What error metric is commonly used for regression tasks?', 'a' => 'Accuracy', 'b' => 'Mean Squared Error', 'c' => 'Precision', 'd' => 'F1 Score', 'ans' => 'b'],
                    ['q' => 'Which algorithm splits data based on information gain?', 'a' => 'K-Nearest Neighbors', 'b' => 'Decision Tree', 'c' => 'Logistic Regression', 'd' => 'SVM', 'ans' => 'b'],
                    ['q' => 'What type of learning has no output labels?', 'a' => 'Supervised Learning', 'b' => 'Unsupervised Learning', 'c' => 'Regression', 'd' => 'Classification', 'ans' => 'b'],
                    ['q' => 'What algorithm is commonly used for clustering data points?', 'a' => 'Linear Regression', 'b' => 'K-Means', 'c' => 'Naive Bayes', 'd' => 'Perceptron', 'ans' => 'b'],
                    ['q' => 'What metric measures the true positive rate against the false positive rate?', 'a' => 'F1 Score', 'b' => 'ROC Curve', 'c' => 'Confusion Matrix', 'd' => 'Precision-Recall Curve', 'ans' => 'b'],
                    ['q' => 'What does SVM stand for?', 'a' => 'System Vector Machine', 'b' => 'Support Vector Machine', 'c' => 'Sequential Value Model', 'd' => 'State Vector Map', 'ans' => 'b'],
                    ['q' => 'What is the activation function commonly used in neural network hidden layers?', 'a' => 'Sigmoid', 'b' => 'ReLU', 'c' => 'Softmax', 'd' => 'Linear', 'ans' => 'b'],
                    ['q' => 'What is backpropagation?', 'a' => 'Reversing database commits', 'b' => 'Gradient calculation for weights in neural nets', 'c' => 'Running code in reverse order', 'd' => 'Restoring system backups', 'ans' => 'b'],
                    ['q' => 'What does under-fitting mean?', 'a' => 'Model running slowly', 'b' => 'Model is too simple to capture data trend', 'c' => 'Model using too much memory', 'd' => 'Data records having missing values', 'ans' => 'b'],
                    ['q' => 'What does the bias-variance trade-off address?', 'a' => 'Hardware costs of model', 'b' => 'Balancing model complexity and error', 'c' => 'Database record cleaning', 'd' => 'API response latency', 'ans' => 'b'],
                    ['q' => 'Which ensemble method builds decision trees in parallel?', 'a' => 'Gradient Boosting', 'b' => 'Random Forest', 'c' => 'AdaBoost', 'd' => 'XGBoost', 'ans' => 'b'],
                    ['q' => 'What does PCA stand for?', 'a' => 'Private Cluster Allocation', 'b' => 'Principal Component Analysis', 'c' => 'Primary Connection Array', 'd' => 'Program Control Assembly', 'ans' => 'b'],
                    ['q' => 'What is cross-validation?', 'a' => 'Encryption validation step', 'b' => 'Splitting data into folds to validate model stability', 'c' => 'Running tests on multiple operating systems', 'd' => 'Sharing parameters across networks', 'ans' => 'b'],
                    ['q' => 'Which neural network is best suited for image processing?', 'a' => 'RNN', 'b' => 'CNN', 'c' => 'GAN', 'd' => 'Autoencoder', 'ans' => 'b'],
                    ['q' => 'Which neural network is best suited for sequence data like text?', 'a' => 'CNN', 'b' => 'RNN', 'c' => 'MLP', 'd' => 'Perceptron', 'ans' => 'b'],
                    ['q' => 'What is learning rate?', 'a' => 'Duration of training session', 'b' => 'Step size parameter in optimization algorithm', 'c' => 'Number of variables used', 'd' => 'Network speed in MB/s', 'ans' => 'b'],
                    ['q' => 'What is classification in machine learning?', 'a' => 'Predicting continuous numeric value', 'b' => 'Predicting a discrete category label', 'c' => 'Grouping unsorted database entries', 'd' => 'Generating synthetic images', 'ans' => 'b'],
                    ['q' => 'What is clustering?', 'a' => 'Sorting database index rows', 'b' => 'Grouping similar data points together', 'c' => 'Multiplying matrix weights', 'd' => 'A type of data encryption', 'ans' => 'b'],
                ]
            ],
            'Cloud Computing' => [
                'quiz_count' => 5,
                'q_count' => 10,
                'pool' => [
                    ['q' => 'What does SaaS stand for in cloud computing?', 'a' => 'System as a Service', 'b' => 'Software as a Service', 'c' => 'Storage as a Service', 'd' => 'Security as a Service', 'ans' => 'b'],
                    ['q' => 'What cloud service model provides virtual machines on demand?', 'a' => 'PaaS', 'b' => 'IaaS', 'c' => 'SaaS', 'd' => 'FaaS', 'ans' => 'b'],
                    ['q' => 'What model provides a runtime environment without managing OS?', 'a' => 'IaaS', 'b' => 'PaaS', 'c' => 'SaaS', 'd' => 'DBaaS', 'ans' => 'b'],
                    ['q' => 'What is virtualization?', 'a' => 'Encrypting hard drives', 'b' => 'Creating virtual representations of hardware', 'c' => 'Running cloud backups', 'd' => 'Scaling database queries', 'ans' => 'b'],
                    ['q' => 'What is public cloud?', 'a' => 'Cloud infrastructure dedicated to single organization', 'b' => 'Cloud services owned and operated by third party', 'c' => 'A local area network sharing drive', 'd' => 'Open source software archive', 'ans' => 'b'],
                    ['q' => 'What is private cloud?', 'a' => 'A protected folder on computer', 'b' => 'Cloud infrastructure dedicated to single organization', 'c' => 'A locked database transaction log', 'd' => 'A secure HTTPS website link', 'ans' => 'b'],
                    ['q' => 'What is hybrid cloud?', 'a' => 'Cloud using multiple hypervisors', 'b' => 'Combination of public and private cloud', 'c' => 'Cloud hosting multiple file formats', 'd' => 'A cloud with variable band rates', 'ans' => 'b'],
                    ['q' => 'What does AWS stand for?', 'a' => 'Applied Web Security', 'b' => 'Amazon Web Services', 'c' => 'Advanced Website Systems', 'd' => 'Alternative Word Search', 'ans' => 'b'],
                    ['q' => 'What is serverless computing?', 'a' => 'Running programs without internet connection', 'b' => 'Execution model where provider runs code dynamically', 'c' => 'A local file database system', 'd' => 'Defragmentation of disk segments', 'ans' => 'b'],
                    ['q' => 'What does elasticity mean in cloud terms?', 'a' => 'Revising cloud licensing contracts', 'b' => 'Ability to scale resources up or down automatically', 'c' => 'System restoring backup logs after crash', 'd' => 'Network packet routing speed', 'ans' => 'b'],
                    ['q' => 'What does SLA stand for?', 'a' => 'Software License Agreement', 'b' => 'Service Level Agreement', 'c' => 'System Lock Allocation', 'd' => 'Storage Link Association', 'ans' => 'b'],
                    ['q' => 'Which cloud database model is fully managed on public cloud?', 'a' => 'Local database', 'b' => 'DBaaS (Database as a Service)', 'c' => 'Indexed text log', 'd' => 'System registry file', 'ans' => 'b'],
                    ['q' => 'What is containerization?', 'a' => 'Zipping files in an archive', 'b' => 'Packaging code and dependencies together', 'c' => 'Encrypting database key values', 'd' => 'Running backup defrag processes', 'ans' => 'b'],
                    ['q' => 'What does GCP stand for?', 'a' => 'Global Connection Port', 'b' => 'Google Cloud Platform', 'c' => 'General Compiler Process', 'd' => 'Guided Control Program', 'ans' => 'b'],
                    ['q' => 'Which tool is widely used to orchestrate container deployments?', 'a' => 'Docker', 'b' => 'Kubernetes', 'c' => 'Git', 'd' => 'VirtualBox', 'ans' => 'b'],
                    ['q' => 'What is multi-tenancy?', 'a' => 'Running multiple operating systems on computer', 'b' => 'Shared resources serving multiple customers', 'c' => 'Setting up multiple admin users', 'd' => 'Hosting multiple domain names', 'ans' => 'b'],
                    ['q' => 'What is a hypervisor?', 'a' => 'A high speed system bus', 'b' => 'Software creating and running virtual machines', 'c' => 'A cloud file backup utility', 'd' => 'A database table index query tool', 'ans' => 'b'],
                    ['q' => 'What does cloud object storage provide?', 'a' => 'A directory tree on file server', 'b' => 'Object storage accessed via API', 'c' => 'Indexed row storage in DBMS', 'd' => 'Direct hardware cache memory', 'ans' => 'b'],
                    ['q' => 'What does network latency measure?', 'a' => 'Volume of data sent per second', 'b' => 'Time delay in data transmission', 'c' => 'Percentage of lost packets', 'd' => 'Encryption strength of channel', 'ans' => 'b'],
                    ['q' => 'What is cloud disaster recovery?', 'a' => 'Anti-virus scanner program', 'b' => 'Policies to restore system operations after failure', 'c' => 'A system de-compiling failed binaries', 'd' => 'A server hardware diagnostic check', 'ans' => 'b'],
                ]
            ],
            'Cyber Security & Cryptography' => [
                'quiz_count' => 8,
                'q_count' => 12,
                'pool' => [
                    ['q' => 'What does the CIA triad in security stand for?', 'a' => 'Control, Integrity, Access', 'b' => 'Confidentiality, Integrity, Availability', 'c' => 'Cryptography, Identity, Authentication', 'd' => 'Cyber, Instance, Allocation', 'ans' => 'b'],
                    ['q' => 'What encryption uses the same key for locking and unlocking?', 'a' => 'Asymmetric Encryption', 'b' => 'Symmetric Encryption', 'c' => 'Hashing', 'd' => 'Digital Signature', 'ans' => 'b'],
                    ['q' => 'What encryption uses public and private key pairs?', 'a' => 'Symmetric Encryption', 'b' => 'Asymmetric Encryption', 'c' => 'Hash functions', 'd' => 'Salting', 'ans' => 'b'],
                    ['q' => 'Which protocol provides secure encrypted web communication?', 'a' => 'HTTP', 'b' => 'HTTPS', 'c' => 'FTP', 'd' => 'SMTP', 'ans' => 'b'],
                    ['q' => 'What is SQL Injection?', 'a' => 'Inserting rows into a table structure', 'b' => 'Executing malicious SQL statements via user input', 'c' => 'A database system crash', 'd' => 'An encryption key error', 'ans' => 'b'],
                    ['q' => 'What is a firewall?', 'a' => 'A hardware overheating sensor', 'b' => 'Device filtering incoming and outgoing network traffic', 'c' => 'An antivirus software tool', 'd' => 'A database transaction logger', 'ans' => 'b'],
                    ['q' => 'What does DDoS stand for?', 'a' => 'Direct Data Output System', 'b' => 'Distributed Denial of Service', 'c' => 'Dynamic Domain Option Select', 'd' => 'Database Distribution Option Service', 'ans' => 'b'],
                    ['q' => 'What is phishing?', 'a' => 'Searching database logs', 'b' => 'Deceptive attempt to steal credentials via fake emails', 'c' => 'A method of file compression', 'd' => 'A loop execution syntax error', 'ans' => 'b'],
                    ['q' => 'Which hashing algorithm is commonly used for secure password storage?', 'a' => 'MD5', 'b' => 'bcrypt', 'c' => 'SHA-1', 'd' => 'Base64', 'ans' => 'b'],
                    ['q' => 'What does VPN stand for?', 'a' => 'Variable Port Network', 'b' => 'Virtual Private Network', 'c' => 'Verify Password Node', 'd' => 'Volume Path Name', 'ans' => 'b'],
                    ['q' => 'What is malware?', 'a' => 'Broken hardware components', 'b' => 'Malicious software designed to disrupt/damage systems', 'c' => 'A database index search check', 'd' => 'A system memory compiler error', 'ans' => 'b'],
                    ['q' => 'What is a zero-day exploit?', 'a' => 'An attack executing at midnight', 'b' => 'Attack targeting unpatched vulnerability', 'c' => 'A failed system backup procedure', 'd' => 'An empty database index row', 'ans' => 'b'],
                    ['q' => 'Which security attack sits silently in the middle of a connection?', 'a' => 'Phishing', 'b' => 'Man-in-the-Middle', 'c' => 'SQLi', 'd' => 'Brute Force', 'ans' => 'b'],
                    ['q' => 'What is a brute force attack?', 'a' => 'Physically stealing servers', 'b' => 'Trying all password combinations systematically', 'c' => 'Overloading the power grid', 'd' => 'A compiler syntax bug', 'ans' => 'b'],
                    ['q' => 'What does encryption do?', 'a' => 'Compresses files into ZIP archives', 'b' => 'Scrambles readable data into unreadable text', 'c' => 'Deletes database transaction logs', 'd' => 'Speeds up processor speed cycles', 'ans' => 'b'],
                    ['q' => 'What is decryption?', 'a' => 'Compiling machine code scripts', 'b' => 'Restoring ciphertext to plaintext', 'c' => 'Analyzing server traffic graphs', 'd' => 'Resetting user password keys', 'ans' => 'b'],
                    ['q' => 'What does the RSA algorithm provide?', 'a' => 'Symmetric Cryptography', 'b' => 'Asymmetric Cryptography', 'c' => 'File Hash Integrity Check', 'd' => 'Network Loop Diagnostics', 'ans' => 'b'],
                    ['q' => 'What is key exchange?', 'a' => 'Changing keyboard layout', 'b' => 'Securely sharing encryption keys over network', 'c' => 'Mapping primary indices in DB', 'd' => 'Setting routing tables in OS', 'ans' => 'b'],
                    ['q' => 'What does MFA stand for?', 'a' => 'Main File Allocation', 'b' => 'Multi-Factor Authentication', 'c' => 'Matrix File Association', 'd' => 'Memory Flow Address', 'ans' => 'b'],
                    ['q' => 'What is penetration testing (pen testing)?', 'a' => 'Writing assembly code scripts', 'b' => 'Authorized simulated cyberattack to check security', 'c' => 'Scanning hard disks for bad sectors', 'd' => 'Testing memory allocations inside RAM', 'ans' => 'b'],
                ]
            ],
            'Computer Organization & Architecture' => [
                'quiz_count' => 4,
                'q_count' => 10,
                'pool' => [
                    ['q' => 'What does ALU stand for in computer systems?', 'a' => 'Address Logic Unit', 'b' => 'Arithmetic Logic Unit', 'c' => 'Array Location Utility', 'd' => 'Alternative Link Unit', 'ans' => 'b'],
                    ['q' => 'Which cache level is closest to the CPU core?', 'a' => 'L2 Cache', 'b' => 'L1 Cache', 'c' => 'L3 Cache', 'd' => 'RAM', 'ans' => 'b'],
                    ['q' => 'What is instruction pipelining?', 'a' => 'Deleting CPU execution threads', 'b' => 'Overlapping stages of instruction execution', 'c' => 'A memory stack structure', 'd' => 'A database table column', 'ans' => 'b'],
                    ['q' => 'What architecture stores data and instructions in the same memory space?', 'a' => 'Harvard', 'b' => 'Von Neumann', 'c' => 'RISC', 'd' => 'CISC', 'ans' => 'b'],
                    ['q' => 'What register holds the address of the next instruction to execute?', 'a' => 'Instruction Register', 'b' => 'Program Counter (PC)', 'c' => 'Accumulator', 'd' => 'Memory Data Register', 'ans' => 'b'],
                    ['q' => 'What does RISC stand for?', 'a' => 'Random Instruction System Code', 'b' => 'Reduced Instruction Set Computer', 'c' => 'Register Integration System Card', 'd' => 'Runtime Interface Selector Connection', 'ans' => 'b'],
                    ['q' => 'What does CISC stand for?', 'a' => 'Complex Instruction Set Computer', 'b' => 'Central Integrated System Control', 'c' => 'Cache Integrated Selector Controller', 'd' => 'Core Instruction Storage Connection', 'ans' => 'a'],
                    ['q' => 'What is assembly language?', 'a' => 'A graphic design compiler syntax', 'b' => 'Low-level language closely mapped to machine code', 'c' => 'A relational database table query', 'd' => 'An abstract class interface OOP', 'ans' => 'b'],
                    ['q' => 'What register holds the currently executing instruction?', 'a' => 'Program Counter', 'b' => 'Instruction Register (IR)', 'c' => 'Data Register', 'd' => 'Index Register', 'ans' => 'b'],
                    ['q' => 'What memory is fast, volatile, and directly accessed by the CPU?', 'a' => 'Hard Disk', 'b' => 'RAM', 'c' => 'ROM', 'd' => 'SSD', 'ans' => 'b'],
                    ['q' => 'What is a bus in computer architecture?', 'a' => 'An operating system thread scheduling queue', 'b' => 'Set of physical wires sharing connection', 'c' => 'A memory cache level module', 'd' => 'A database row index key', 'ans' => 'b'],
                    ['q' => 'What is DMA?', 'a' => 'Direct Memory Access', 'b' => 'Digital Media Allocation', 'c' => 'Dynamic Memory Array', 'd' => 'Database Model Assembly', 'ans' => 'a'],
                    ['q' => 'Which CPU unit decodes instructions?', 'a' => 'ALU', 'b' => 'Control Unit', 'c' => 'Registers', 'd' => 'Bus Interface', 'ans' => 'b'],
                    ['q' => 'What is a clock cycle?', 'a' => 'Time taken to run a full backup', 'b' => 'Time between two ticks of CPU oscillator', 'c' => 'Process execution priority value', 'd' => 'Network packet travel delay', 'ans' => 'b'],
                    ['q' => 'What does GPU stand for?', 'a' => 'Graphical Process Unit', 'b' => 'Graphics Processing Unit', 'c' => 'General Processing Utility', 'd' => 'Global Parameter Unit', 'ans' => 'b'],
                    ['q' => 'What is a cache hit?', 'a' => 'Processor successfully executing an instruction', 'b' => 'Requested data found in cache memory', 'c' => 'Compiling project files with zero errors', 'd' => 'A database query return time', 'ans' => 'b'],
                    ['q' => 'What is a cache miss?', 'a' => 'Processor executing a wrong branch', 'b' => 'Requested data not found in cache memory', 'c' => 'A memory leak compiler crash', 'd' => 'Failed database save transaction', 'ans' => 'b'],
                    ['q' => 'What is the role of CPU registers?', 'a' => 'Long term database backup storage', 'b' => 'Small, fast storage directly inside CPU', 'c' => 'Routing internet network traffic', 'd' => 'Interpreting compilation code files', 'ans' => 'b'],
                    ['q' => 'What is a machine cycle?', 'a' => 'A compiler optimization loop stage', 'b' => 'Fetch, Decode, Execute, Store sequence', 'c' => 'An OS scheduling dispatcher loop', 'd' => 'Memory defragmentation cycle', 'ans' => 'b'],
                    ['q' => 'What is ROM?', 'a' => 'Random Access Memory', 'b' => 'Read-Only Memory', 'c' => 'Register Object Module', 'd' => 'Router Output Map', 'ans' => 'b'],
                ]
            ],
            'Digital Logic Design' => [
                'quiz_count' => 3,
                'q_count' => 8,
                'pool' => [
                    ['q' => 'Which gate outputs 1 only if all inputs are 1?', 'a' => 'OR', 'b' => 'AND', 'c' => 'XOR', 'd' => 'NAND', 'ans' => 'b'],
                    ['q' => 'Which gate outputs 0 only if all inputs are 0?', 'a' => 'AND', 'b' => 'OR', 'c' => 'NOR', 'd' => 'XOR', 'ans' => 'b'],
                    ['q' => 'What is Boolean algebra?', 'a' => 'A branch of physics', 'b' => 'Branch of mathematics dealing with binary values', 'c' => 'An database index structure representation', 'd' => 'A compiler code parsing analyzer', 'ans' => 'b'],
                    ['q' => 'Which gate outputs 1 if inputs are different?', 'a' => 'AND', 'b' => 'XOR', 'c' => 'NOR', 'd' => 'XNOR', 'ans' => 'b'],
                    ['q' => 'What does a multiplexer (MUX) do?', 'a' => 'Encrypts binary data stream', 'b' => 'Selects one input from many and forwards it', 'c' => 'Routes one input to multiple outputs', 'd' => 'Stores a single bit of state data', 'ans' => 'b'],
                    ['q' => 'What does a demultiplexer (DEMUX) do?', 'a' => 'Decrypts binary data streams', 'b' => 'Takes one input and routes to one of many outputs', 'c' => 'Combines multiple signals in one channel', 'd' => 'Adds two binary numbers together', 'ans' => 'b'],
                    ['q' => 'What is a flip-flop?', 'a' => 'An loop execution syntax error', 'b' => 'Sequential circuit storing 1 bit of state', 'c' => 'A memory defragmenter utility tool', 'd' => 'A network packet router protocol', 'ans' => 'b'],
                    ['q' => 'What is a Karnaugh map (K-map) used for?', 'a' => 'Routing packets across the internet network', 'b' => 'Simplifying Boolean expressions', 'c' => 'Compiling intermediate assembly code', 'd' => 'Indexing primary keys in relational DB', 'ans' => 'b'],
                    ['q' => 'Which logic circuit performs binary addition of two bits?', 'a' => 'Full Adder', 'b' => 'Half Adder', 'c' => 'Multiplexer', 'd' => 'Decoder', 'ans' => 'b'],
                    ['q' => 'Which logic circuit performs binary addition of three bits?', 'a' => 'Half Adder', 'b' => 'Full Adder', 'c' => 'Demultiplexer', 'd' => 'Encoder', 'ans' => 'b'],
                    ['q' => 'What is combinational logic?', 'a' => 'A database table relation mapping', 'b' => 'Circuit output depends only on current inputs', 'c' => 'Circuit output depends on past inputs', 'd' => 'An exception handling try-catch block', 'ans' => 'b'],
                    ['q' => 'What is sequential logic?', 'a' => 'A compiler lexical scanner stage logic', 'b' => 'Circuit output depends on current and past inputs', 'c' => 'Circuit output depends on clock frequency rate only', 'd' => 'A linear search matching logic loop', 'ans' => 'b'],
                    ['q' => 'What is a universal gate?', 'a' => 'AND gate', 'b' => 'Gate that can implement all other gates (NAND, NOR)', 'c' => 'XOR gate', 'd' => 'OR gate', 'ans' => 'b'],
                    ['q' => 'Which gate is an inverted OR gate?', 'a' => 'NAND', 'b' => 'NOR', 'c' => 'XNOR', 'd' => 'AND', 'ans' => 'b'],
                    ['q' => 'Which gate is an inverted AND gate?', 'a' => 'NOR', 'b' => 'NAND', 'c' => 'XNOR', 'd' => 'OR', 'ans' => 'b'],
                    ['q' => 'What is an encoder?', 'a' => 'An network packet encryptor tool', 'b' => 'Circuit converting active input to binary code', 'c' => 'A database table primary key mapper', 'd' => 'A compiler code parsing module', 'ans' => 'b'],
                    ['q' => 'What is a decoder?', 'a' => 'An network packet decryptor tool', 'b' => 'Circuit converting binary code to active output', 'c' => 'An instruction register parser module', 'd' => 'A file compiler assembler script', 'ans' => 'b'],
                    ['q' => 'What does 1-bit represent?', 'a' => 'Character text string', 'b' => 'Single binary digit (0 or 1)', 'c' => 'Integer array element pointer', 'd' => 'Floating point coordinate value', 'ans' => 'b'],
                    ['q' => 'What is a latch?', 'a' => 'An database transaction deadlock check', 'b' => 'Level-triggered sequential memory device', 'c' => 'A system compiler loop optimizer', 'd' => 'A network channel band controller', 'ans' => 'b'],
                    ['q' => 'What is a counter?', 'a' => 'A database row counting function', 'b' => 'Sequential circuit cycling through state sequence', 'c' => 'A recursive code index iterator', 'd' => 'A network router diagnostic ping', 'ans' => 'b'],
                ]
            ],
            'Discrete Mathematics' => [
                'quiz_count' => 5,
                'q_count' => 10,
                'pool' => [
                    ['q' => 'What is a set in discrete mathematics?', 'a' => 'An index list in database', 'b' => 'Collection of distinct objects', 'c' => 'A class variable structure', 'd' => 'A compiler parse token block', 'ans' => 'b'],
                    ['q' => 'What is the union of sets A and B?', 'a' => 'Set of elements in both A and B', 'b' => 'Set of elements in A or B', 'c' => 'Set of elements in A but not B', 'd' => 'Empty null set', 'ans' => 'b'],
                    ['q' => 'What is the intersection of sets A and B?', 'a' => 'Set of elements in A or B', 'b' => 'Set of elements in both A and B', 'c' => 'Set of all ordered pairs (a,b)', 'd' => 'Complement of set A and B', 'ans' => 'b'],
                    ['q' => 'What is a graph in discrete mathematics?', 'a' => 'A visual data chart representation', 'b' => 'Mathematical structure of vertices and edges', 'c' => 'A database table schema design', 'd' => 'A memory cache mapping level layout', 'ans' => 'b'],
                    ['q' => 'What is a tree in graph theory?', 'a' => 'A database index hierarchy', 'b' => 'Connected graph with no cycles', 'c' => 'A search search algorithm pattern', 'd' => 'An assembly file pointer structure', 'ans' => 'b'],
                    ['q' => 'What is a proposition?', 'a' => 'A database table primary key select', 'b' => 'Declarative statement that is true or false', 'c' => 'An exception handling try block code', 'd' => 'An compiler code optimization script', 'ans' => 'b'],
                    ['q' => 'What does a truth table show?', 'a' => 'Compilation outputs log', 'b' => 'Logical values of expression for all input combinations', 'c' => 'CPU pipelining timing delays graph', 'd' => 'A sorting algorithm complexity rate', 'ans' => 'b'],
                    ['q' => 'What is a bijection?', 'a' => 'An recursive function logic', 'b' => 'Function that is both injective and surjective', 'c' => 'A class inheritance definition OOP', 'd' => 'An database entity-relation structure', 'ans' => 'b'],
                    ['q' => 'What is the pigeonhole principle?', 'a' => 'An compiler token sorting logic', 'b' => 'If n items put in m containers and n > m, one holds >= 2 items', 'c' => 'An dynamic memory partition compaction logic', 'd' => 'A network routing path select rule', 'ans' => 'b'],
                    ['q' => 'What is mathematical induction?', 'a' => 'Calculating CPU voltage frequency rates', 'b' => 'Proof technique verifying formulas for integers', 'c' => 'Compiling source code files in package', 'd' => 'Searching database keys recursively', 'ans' => 'b'],
                    ['q' => 'What is the Cartesian product of sets A and B?', 'a' => 'Set of elements in A and B', 'b' => 'Set of all ordered pairs (a, b)', 'c' => 'Set of elements in A but not B', 'd' => 'The intersection of sets A and B', 'ans' => 'b'],
                    ['q' => 'What is a combination?', 'a' => 'An OOP interface declaration', 'b' => 'Selection of items where order doesn\'t matter', 'c' => 'Arrangement of items where order matters', 'd' => 'A database join relationship key', 'ans' => 'b'],
                    ['q' => 'What is a permutation?', 'a' => 'An array element index pointer', 'b' => 'Arrangement of items where order matters', 'c' => 'Selection of items where order doesn\'t matter', 'd' => 'A file compiler assembler code target', 'ans' => 'b'],
                    ['q' => 'What is a null set?', 'a' => 'An empty database index row', 'b' => 'Set with no elements', 'c' => 'A class structure with no variable', 'd' => 'An unallocated memory partition stack', 'ans' => 'b'],
                    ['q' => 'What is a subset?', 'a' => 'An database schema definition record', 'b' => 'Set containing elements that all belong to another set', 'c' => 'An compiler parsing grammar module', 'd' => 'A class inheritance subclass OOP', 'ans' => 'b'],
                    ['q' => 'What is the negation of a true proposition?', 'a' => 'True', 'b' => 'False', 'c' => 'Null', 'd' => 'Undefined', 'ans' => 'b'],
                    ['q' => 'What is an equivalence relation?', 'a' => 'Relation that is reflexive only', 'b' => 'Relation that is reflexive, symmetric, and transitive', 'c' => 'A database table relationship mapping key', 'd' => 'An OOP inheritance class visibility modifier', 'ans' => 'b'],
                    ['q' => 'What is an Euler path?', 'a' => 'Path visiting every vertex of graph once', 'b' => 'Path visiting every edge of graph exactly once', 'c' => 'An recursion execution trace stack path', 'd' => 'An database query execution plan path', 'ans' => 'b'],
                    ['q' => 'What is a Hamilton path?', 'a' => 'Path visiting every edge of graph once', 'b' => 'Path visiting every vertex of graph exactly once', 'c' => 'An search index table tree search path', 'd' => 'An network packet routing select path', 'ans' => 'b'],
                    ['q' => 'What is modular arithmetic?', 'a' => 'A branch of database normalize rules', 'b' => 'Arithmetic for integers with remainder wraps', 'c' => 'An compiler loop optimization calculations', 'd' => 'An CPU bus timing cycle calculation', 'ans' => 'b'],
                ]
            ],
        ];

        // Seed Categories, Quizzes, and MCQs dynamically using the real data pool
        foreach ($categoriesData as $catName => $catDetails) {
            $category = \App\Models\Category::create([
                'name' => $catName,
                'creator' => 'admin',
            ]);

            $quizCount = $catDetails['quiz_count'];
            $qCount = $catDetails['q_count'];
            $qPool = $catDetails['pool'];
            $poolSize = count($qPool);

            for ($i = 1; $i <= $quizCount; $i++) {
                $quiz = \App\Models\Quiz::create([
                    'name' => "$catName - Quiz $i",
                    'category_id' => $category->id,
                ]);

                if ($i == 1) {
                    $rec = \App\Models\Record::create([
                        'user_id' => $aditya->id,
                        'quiz_id' => $quiz->id,
                        'status' => 2,
                    ]);
                }

                for ($j = 1; $j <= $qCount; $j++) {
                    // Select question from pool based on quiz index and question index to ensure uniqueness per quiz
                    $poolIndex = ($i + $j - 2) % $poolSize;
                    $qItem = $qPool[$poolIndex];

                    $mcq = \App\Models\Mcq::create([
                        'question' => $qItem['q'],
                        'a' => $qItem['a'],
                        'b' => $qItem['b'],
                        'c' => $qItem['c'],
                        'd' => $qItem['d'],
                        'correct_ans' => $qItem['ans'],
                        'admin_id' => $admin->id,
                        'quiz_id' => $quiz->id,
                        'category_id' => $category->id,
                    ]);

                    if ($i == 1) {
                        \App\Models\MCQ_Record::create([
                            'record_id' => $rec->id,
                            'user_id' => $aditya->id,
                            'mcq_id' => $mcq->id,
                            'select_answer' => $mcq->correct_ans,
                            'is_correct' => true,
                        ]);
                    }
                }
            }
        }
    }
}
