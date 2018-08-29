using System;
using System.Collections.Generic;

namespace P04_FixEmails
{
    class Program
    {
        static void Main(string[] args)
        {
            Dictionary<string, string> mailList = new Dictionary<string, string>();

            while (true)
            {
                string name = Console.ReadLine();

                if ("stop" == name)
                {
                    break;
                }
                else
                {
                    string mail = Console.ReadLine();

                    bool endWhit = true;
                    if (mail.EndsWith("us") || mail.EndsWith("uk"))
                    {
                        endWhit = false;
                    }
                    

                    if (endWhit)
                    {
                    mailList.Add(name, mail);
                    }
                }

            }

            foreach (var emile in mailList)
            {
                Console.WriteLine(string.Join(" -> ", emile.Key, emile.Value));
            }
        }
    }
}
