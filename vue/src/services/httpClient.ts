import axios, { AxiosInstance, AxiosRequestConfig, AxiosResponse } from "axios";

class HttpClient {
  private client: AxiosInstance;

  constructor() {
    const config: AxiosRequestConfig = {
      baseURL: "http://127.0.0.1:8000/api/",
    };

    this.client = axios.create(config);
  }

  /**
   * GETリクエスト
   * @param url URL
   * @param config AxiosRequestConfig
   * @returns AxiosResponse
   */
  get = async <T>(
    url: string,
    config: AxiosRequestConfig = {}
  ): Promise<AxiosResponse<T>> => {
    return await this.client.get<T>(url, config);
  };

  /**
   * POSTリクエスト
   * @param url URL
   * @param data POSTデータ
   * @param config AxiosRequestConfig
   * @returns AxiosResponse
   */
  post = async <T>(
    url: string,
    data: any = undefined,
    config: AxiosRequestConfig = {}
  ): Promise<AxiosResponse<any>> => {
    return await this.client.post<T>(url, data, config);
  };

  /**
   * PUTリクエスト
   * @param url URL
   * @param data PUTデータ
   * @param config AxiosRequestConfig
   * @returns AxiosResponse
   */
  put = async <T>(
    url: string,
    data: any = undefined,
    config: AxiosRequestConfig = {}
  ): Promise<AxiosResponse<any>> => {
    return await this.client.put<T>(url, data, config);
  };

  /**
   * DELETEリクエスト
   * @param url URL
   * @param config AxiosRequestConfig
   * @returns AxiosResponse
   */
  delete = async <T>(
    url: string,
    config: AxiosRequestConfig = {}
  ): Promise<AxiosResponse<any>> => {
    return await this.client.delete<T>(url, config);
  };
}

// singleton
const httpClient = new HttpClient();

export { httpClient };
