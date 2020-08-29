import java.net.*;
import java.io.*;

public class ControlPanel
{
	public static void main(String args[]) throws IOException {
        String FromUser;
		FromUser = args[0];
			Runtime runtime = Runtime.getRuntime();
			if(FromUser.equals("Open Notepad")){
				try
				{
					runtime.exec("notepad.exe");
				}
				catch (IOException e)
				{
					// e.printStackTrace();
					System.out.println("Failed");
				}
			}
			if(FromUser.equals("Open Chrome")){
				try
				{
					runtime.exec("C:\\Program Files (x86)\\Google\\Chrome\\Application\\chrome.exe");
				}
				catch (IOException e)
				{
					// e.printStackTrace();
					System.out.println("Failed");
				}
			}
			if(FromUser.equals("Open Explorer")){
				try
				{
					runtime.exec("C:\\Windows\\explorer.exe");
				}
				catch (IOException e)
				{
					// e.printStackTrace();
					System.out.println("Failed");
				}
			}
			if(FromUser.equals("Shutdown Device")){
				Process proc = runtime.exec("shutdown -s -t 0");
				System.exit(0);
			}
			if(FromUser.equals("Open Xampp")){
				try
				{
					runtime.exec("D:\\xampp\\xampp-control.exe");
				}
				catch (IOException e)
				{
					// e.printStackTrace();
					System.out.println("Failed");
				}
			}
	}
} 