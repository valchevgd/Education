using System;
using System.Collections.Generic;
using System.Linq;

namespace P04_
{
    class Program
    {
        static void Main(string[] args)
        {
            Dictionary<string, int> users = new Dictionary<string, int>();
            Dictionary<string, int> languages = new Dictionary<string, int>();

            string line = Console.ReadLine();

            while (line != "exam finished")
            {
                string[] tokens = line
                    .Split('-');

                string user = "";
                string language = "";
                int points = 0;

                if (tokens.Length == 2)
                {
                    user = tokens[0];
                    if (users.ContainsKey(user))
                    {
                        users.Remove(user);
                    }
                 
                    line = Console.ReadLine();
                    continue;
                }
                else
                {
                    user = tokens[0];
                    language = tokens[1];
                    points = int.Parse(tokens[2]);

                    if (users.ContainsKey(user) == false)
                    {
                        users.Add(user, points);
                    }
                    if (users[user] < points)
                    {
                        users[user] = points;
                    }
                    if (languages.ContainsKey(language) == false)
                    {
                        languages.Add(language, 0);
                    }
                    languages[language]++;
                }

                line = Console.ReadLine();
            }

            Console.WriteLine("Results:");
            foreach (var user in users.OrderByDescending(x => x.Value).ThenBy(x => x.Key))
            {
                Console.WriteLine($"{user.Key} | {user.Value}");
            }

            Console.WriteLine("Submissions:");
            foreach (var leanguage in languages.OrderByDescending(x => x.Value).ThenBy(x => x.Key))
            {
                Console.WriteLine($"{leanguage.Key} - {leanguage.Value}");
            }
        }
    }
}
