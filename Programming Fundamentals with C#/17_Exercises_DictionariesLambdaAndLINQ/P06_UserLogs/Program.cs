using System;
using System.Collections.Generic;
using System.Linq;

namespace P06_UserLogs
{
    class Program
    {
        static void Main(string[] args)
        {
            SortedDictionary<string, Dictionary<string, int>> listOfUsers = new SortedDictionary<string, Dictionary<string, int>>();

            while (true)
            {
                string[] input = Console.ReadLine().Split(' ', '=');

                if (input[0] == "end")
                {
                    break;
                }

                string ip = input[1];
                string user = input[5];

                if (listOfUsers.ContainsKey(user) == false)
                {
                    listOfUsers.Add(user, new Dictionary<string, int>());
                }

                if (listOfUsers[user].ContainsKey(ip) == false)
                {
                    listOfUsers[user].Add(ip, 0);
                }
                listOfUsers[user][ip]++;
            }

            foreach (var name in listOfUsers)
            {
                Console.WriteLine($"{name.Key}: ");
                int count = 1;
                foreach (var ip in name.Value)
                {
                    Console.Write($"{ip.Key} => {ip.Value}");
                    //Console.WriteLine(name.Value.Values.Count);
                    if (count < name.Value.Values.Count)
                    {
                        Console.Write(", ");
                        count++;
                    }
                }
                Console.WriteLine(".");
            }
        }
    }
}
