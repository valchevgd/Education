using System;
using System.Collections.Generic;
using System.Linq;

namespace P07_AndreyAndBilliard
{
    class Program
    {
        static void Main(string[] args)
        {
            int n = int.Parse(Console.ReadLine());

            Dictionary<string, decimal> menu = new Dictionary<string, decimal>();

            for (int i = 0; i < n; i++)
            {
                string[] tokens = Console.ReadLine()
                    .Split('-');
                string productName = tokens[0];
                decimal productPrice = decimal.Parse(tokens[1]);

                if (menu.ContainsKey(productName) == false)
                {
                    menu.Add(productName, 0);
                }
                menu[productName] = productPrice;
            }

            List<Customer> clients = new List<Customer>();

            while (true)
            {
                string line = Console.ReadLine();
                if (line == "end of clients")
                {
                    break;
                }

                string[] tokens = line.Split(new char[] { '-', ',' });
                string clientName = tokens[0];
                string order = tokens[1];
                int quantity = int.Parse(tokens[2]);

                if (menu.Any(x => x.Key == order) == false)
                {
                    continue;
                }

                Customer customer = clients.FirstOrDefault(x => x.Name == clientName);
                if (customer == null)
                {
                    Customer newCustomer = new Customer(clientName);
                    newCustomer.Order.Add(order, quantity);
                    clients.Add(new Customer(clientName));
                }
                else
                {
                    if (customer.Order.ContainsKey(order) == false)
                    {
                        customer.Order.Add(order, quantity);
                    }
                    else
                    {
                        customer.Order[order] += quantity;
                    }
                }
            }

            foreach (var client in clients)
            {
                foreach (var orderedProduct in client.Order)
                {
                    client.Bill += orderedProduct.Value * menu.First(x => x.Key == orderedProduct.Key).Value;
                }
            }

            foreach (var client in clients)
            {
                Console.WriteLine(client.Name);
                Console.WriteLine($"-- {client.Order}");
                Console.WriteLine($"Bill: {client.Bill}");
            }

            //Console.WriteLine();
        }
    }

    class Customer
    {
        public Customer(string name)
        {
            this.Name = name;
        }

        public Customer(Dictionary<string, int> order)
        {
            this.Order = order;
        }

        public Customer(decimal bill)
        {
            this.Bill = bill;
            
        }

        public string Name { get; set; }

        public Dictionary<string, int> Order { get; set; }

        public decimal Bill { get; set; }
    }
}
