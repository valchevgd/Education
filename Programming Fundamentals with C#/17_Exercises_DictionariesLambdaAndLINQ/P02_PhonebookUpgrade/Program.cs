using System;
using System.Collections.Generic;

namespace P02_PhonebookUpgrade
{
    class Program
    {
        static void Main(string[] args)
        {
            SortedDictionary<string, string> phoneBook = new SortedDictionary<string, string>();

            while (true)
            {
                string[] comands = Console.ReadLine().Split();

                string comand = comands[0];





                if (comand == "A")
                {
                    string name = comands[1];
                    string phoneNumber = comands[2];

                    if (!phoneBook.ContainsKey(name))
                    {
                        phoneBook.Add(name, "");
                    }

                    phoneBook[name] = phoneNumber;
                }
                else if (comand == "S")
                {
                    string name = comands[1];
                    if (phoneBook.ContainsKey(name))
                    {
                        Console.WriteLine(string.Join(" -> ", name, phoneBook[name]));
                    }
                    else
                    {
                        Console.WriteLine($"Contact {name} does not exist.");
                    }
                }
                else if (comand == "ListAll")
                {
                    foreach (var contacts in phoneBook)
                    {
                        Console.WriteLine(string.Join(" -> ", contacts.Key, contacts.Value));
                    }
                }
                else if (comand == "END")
                {
                    break;
                }

            }
        }
    }
}
