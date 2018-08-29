using System;
using System.Collections.Generic;
using System.Linq;

namespace P09_LegendaryFarming
{
    class Program
    {
        static void Main(string[] args)
        {
            Dictionary<string, double> keyMaterials = new Dictionary<string, double>();
            Dictionary<string, double> junkMaterials = new Dictionary<string, double>();

            bool legenderyItem = false;
            string doneItem = "";

            keyMaterials.Add("shards", 0);
            keyMaterials.Add("fragments", 0);
            keyMaterials.Add("motes", 0);

            while (!legenderyItem)
            {
                string[] input = Console.ReadLine().ToLower().Split().ToArray();

                for (int i = 0; i < input.Length - 1; i += 2)
                {
                    double quantity = double.Parse(input[i]);
                    string material = input[i + 1];

                    if (keyMaterials.ContainsKey(material))
                    {
                        keyMaterials[material] += quantity;

                        if (keyMaterials[material] > 250)
                        {
                            legenderyItem = true;

                            if ("shards" == material)
                            {
                                doneItem = "Shadowmourne";
                            }
                            else if ("fragments" == material)
                            {
                                doneItem = "Valanyr";
                            }
                            else if ("motes" == material)
                            {
                                doneItem = "Dragonwrath";
                            }
                            keyMaterials[material] -= 250;

                            break;
                        }
                    }
                    else
                    {
                        if (junkMaterials.ContainsKey(material) == false)
                        {
                            junkMaterials.Add(material, 0);
                        }

                        junkMaterials[material] += quantity;
                    }
                }
            }
            Console.WriteLine($"{doneItem} obtained!");

            foreach (var key in keyMaterials.OrderByDescending(x => x.Value).ThenBy(x => x.Key))
            {
                Console.WriteLine(string.Join(": ", key.Key, key.Value));
            }
            foreach (var junk in junkMaterials.OrderBy(x => x.Key).ThenBy(x => x.Value))
            {
                Console.WriteLine(string.Join(": ", junk.Key, junk.Value));
            }
            //Console.WriteLine();
        }
    }
}
