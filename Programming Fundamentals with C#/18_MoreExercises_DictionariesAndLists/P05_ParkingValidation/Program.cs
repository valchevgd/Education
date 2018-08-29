using System;
using System.Collections.Generic;
using System.Linq;

namespace P05_ParkingValidation
{
    class Program
    {
        static void Main(string[] args)
        {
            Dictionary<string, string> users = new Dictionary<string, string>();

            int n = int.Parse(Console.ReadLine());

            for (int i = 0; i < n; i++)
            {
                string[] tokens = Console.ReadLine().Split();
                string comand = tokens[0];
                string username = tokens[1];

                if (comand == "unregister")
                {
                    if (users.ContainsKey(username))
                    {
                        Console.WriteLine($"user {username} unregistered successfully");
                        users.Remove(username);
                    }
                    else
                    {
                        Console.WriteLine($"ERROR: user {username} not found");
                    }
                }
                else
                {
                    string licensePlateNumber = tokens[2];

                    char[] tempNum = licensePlateNumber.ToCharArray();
                    bool validPlateNumber = true;
                    if (!(tempNum[0] >= 'A' && tempNum[0] <= 'Z')
                        || !(tempNum[1] >= 'A' && tempNum[1] <= 'Z')
                        || !(tempNum[6] >= 'A' && tempNum[6] <= 'Z')
                        || !(tempNum[7] >= 'A' && tempNum[7] <= 'Z'))
                    {
                        validPlateNumber = false;
                    }

                    int num = 0;
                    char[] numToParse = licensePlateNumber.Skip(2).Take(4).ToArray();
                    string numToParse2 = new string(numToParse);
                    bool isValid = int.TryParse(numToParse2, out num);
                    if (!isValid)
                    {
                        validPlateNumber = false;
                    }

                    if (!validPlateNumber)
                    {
                        Console.WriteLine($"ERROR: invalid license plate {licensePlateNumber}");
                    }
                    else
                    {
                        if (users.ContainsKey(username) == false && users.ContainsValue(licensePlateNumber) == false)
                        {
                            users.Add(username, licensePlateNumber);
                            Console.WriteLine($"{username} registered {licensePlateNumber} successfully");
                        }
                        else if (users.ContainsKey(username))
                        {
                            Console.WriteLine($"ERROR: already registered with plate number {licensePlateNumber}");
                        }
                        else
                        {
                            Console.WriteLine($"ERROR: license plate {licensePlateNumber} is busy");
                        }
                    }
                }
            }

            foreach (var user in users)
            {
                Console.WriteLine($"{user.Key} => {user.Value}");
            }
        }
    }
}
